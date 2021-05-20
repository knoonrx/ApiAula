<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Conteudo extends Model
{

    protected $table = 'conteudo';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'titulo',
        'descricao',
        'horario',
        'curso_id',
        'periodo_id',
        'disciplina_id',
    ];


}
