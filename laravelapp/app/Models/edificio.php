<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edificio extends Model
{
    use HasFactory;
    
    protected $table='edificio';
    public $timestamps = true;
    protected $primaryKey ='id';
}
