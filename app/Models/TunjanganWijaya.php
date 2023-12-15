<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TunjanganWijaya extends Model
{
    use HasFactory;
    protected $table = 'pejabat';
    protected $fillable = ['nama', 'email'];
}
