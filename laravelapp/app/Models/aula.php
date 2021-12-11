<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aula extends Model
{
    use HasFactory;
    
    protected $table='aulas';
    public $timestamps = true;
    protected $primaryKey ='id';
}
