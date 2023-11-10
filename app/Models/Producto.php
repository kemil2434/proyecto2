<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'Producto';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = [

            'nombre',
            'categoria',
            'descripcion',
            'imagen',
            'precio',
            'stock',
            'fecha-registro'
            

    ];
}