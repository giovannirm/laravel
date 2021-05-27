<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;  
    
    /* Acá ponemos los campos que queremos permitir que se guarden, pero
    si fueran muchos campos esto se llenaría de código*/
    /* protected $fillable = ['name', 'price', 'category']; */

    /* Como antípoda surge guarder, acá ponemos los campos que
     queremos proteger */
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}