<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public $primaryKey = 'id';
    protected $table = 'staff';
    protected $timestamp  = true;

    public function students(){
        return $this->hasMany(Student::class,'class','class_held');
    }
}
