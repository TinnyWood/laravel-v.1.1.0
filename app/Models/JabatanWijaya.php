<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JabatanWijaya extends Model
{
    use HasFactory;

    protected $table = 'jabatanwijaya';
    protected $fillable = ['jabatan', 'deskripsi', 'gaji'];
}
