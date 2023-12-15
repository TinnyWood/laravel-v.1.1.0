<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMachineRequest;
use App\Http\Requests\UpdateMachineRequest;
use App\Http\Requests\ImportMachineRequest;

use App\Machine;
use App\Events\MachineIsUpdatedOrCreated;

use Exception;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MachinesImport;

class MachineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('machine.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('machine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMachineRequest $request)
    {
        $response = [];
        try {
            $machine = new Machine;
            $machine->line_id = $request->line_id;
            $machine->code = $request->code;
            $machine->name = $request->name;
            $machine->description = $request->description;
            $machine->machine_no = $request->machine_no;
            $machine->save();

            //fire event
            event(new MachineIsUpdatedOrCreated($machine));

            $response['status'] = TRUE;
            $response['message'] = 'Machine has been created';
            $response['data']['url'] = url('/machine/' . $machine->id);
        } catch (Exception $e) {
            return $e;
        }
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $machine = Machine::findOrFail($id);
        return view('machine.show')
            ->with('machine', $machine);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $machine = Machine::findOrFail($id);
        return view('machine.edit')
            ->with('machine', $machine);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMachineRequest $request, $id)
    {
        $response = [];
        try {
            $machine = Machine::findOrFail($id);
            $machine->line_id = $request->line_id;
            $machine->code = $request->code;
            $machine->name = $request->name;
            $machine->description = $request->description;
            $machine->machine_no = $request->machine_no;
            $machine->save();
            //fire event
            event(new MachineIsUpdatedOrCreated($machine));

            $response['status'] = TRUE;
            $response['message'] = 'Machine has been updated';
            $response['data']['url'] = url('/machine/' . $machine->id);
        } catch (Exception $e) {
            return $e;
        }
        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = FALSE;
        try {
            $machine = Machine::find($id);
            if(!count($machine->process_ability_check_sheet_masters)){
                $machine->delete();
            }
            $result = TRUE;
        } catch (Exception $e) {
            $result = FALSE;
        }
        return $result;
    }

    public function delete(Request $request)
    {
        $response = [];
        if (count($request->id)) {
            $counter = 0;
            foreach ($request->id as $id) {
                $destroy = $this->destroy($id);
                if ($destroy == TRUE) {
                    $counter++;
                }
            }
            $response['status'] = TRUE;
            $response['message'] = $counter . ' machine(s) has been deleted';
        } else {
            $response['status'] = FALSE;
            $response['message'] = 'No data supplied';
        }
        return response()->json($response);
    }

    //Import
    public function import(ImportMachineRequest $request)
    {
        //return $request->file;
        //return $request->file('file');
        $response = [];
        try {
            $importedData = new MachinesImport;
            Excel::import($importedData, request()->file('file'));
           //  dd($importedData->getData());
           
            $response['status'] = TRUE;
            $response['message'] = 'Machine has been imported';
        } catch (Exception $e) {
            return $e;
        }
        return response()->json($response);
    }
}
