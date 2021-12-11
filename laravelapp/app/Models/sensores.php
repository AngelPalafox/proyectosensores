<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensores extends Model
{
    use HasFactory;
    protected $table='valores';
    public $timestamps = true;
    protected $primaryKey ='id';
}
