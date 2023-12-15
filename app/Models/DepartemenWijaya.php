<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartemenWijaya extends Model
{
    use HasFactory;

    protected $table = 'DepartemenWijaya';
    protected $fillable = ['departemen'];
}
