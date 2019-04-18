<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Aluno extends Model
{

    protected $fillable = [
        'nome',
        'email',
        'dt_nascimento'
    ];

    protected $dates = [
        'dt_nascimento',
        'created_at',
        'updated_at'
    ];

}
