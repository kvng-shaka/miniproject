<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'students';
    protected $timestamp  = true;

    public function staff(){
        return $this->belongsTo(Staff::class,'class_held','class');
    }
}
