<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usert extends Model
{
    use HasFactory;
    protected $table='user';
    public $timestamps = true;
    protected $primaryKey ='id';
    
    public function trip()
    {
        return $this->belongsTo(trip::class);
    }
}
