<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//Cambios
class Producto extends Model
{
    protected $table='productos';
    protected $primarykey='id_producto';
}
