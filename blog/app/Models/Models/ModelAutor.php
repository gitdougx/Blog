<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAutor extends Model
{
    protected $table='Autor';

    public function relUsers()
    {
        return$this->hasOne('App\User', 'id',  'id_user');
    }
}
