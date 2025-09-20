<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'idProduct';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = ['nombre','precio','descripcion','imagen',];
    public $timestamps = false;


}
