<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pejabat extends Model
{
    use HasFactory;
    public $table = "pejabat";
    public $fillable = ['nama', 'email'];
}
