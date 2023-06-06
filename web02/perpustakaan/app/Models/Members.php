<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $table = 'members';
    // semua kolom waji diisii
    protected $fillable = ['name', 'email', 'gender', 'status', 'address'];

    public $timestamps = false;
}
