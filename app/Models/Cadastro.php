<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Auxsituacao;

class Cadastro extends Model
{
    use HasFactory;

    protected $table = 'cadastro';

    protected $fillable = [

        'numcontrato',
        'empresa',
        'processos',
        'homologacao',
        'ajudicacao',
        'executiva',
        'siggo',
        'valor',
        'licitacao',
        'modalidade',
        'inivigencia',
        'fimvigencia',
        'iniexecucao',
        'fimexecucao',
        'auxsituacao',
        'auxdiretoria',
        'auxstatus'

    ];

    public function Auxsituacao(): BelongsTo
    {
        return $this->belongsTo(Auxsituacao::class, 'auxsituacao', 'id');
    }

    public function Auxdiretoria(): BelongsTo
    {
        return $this->belongsTo(Auxdiretoria::class, 'auxdiretoria', 'id');
    }

    public function Auxstatus(): BelongsTo
    {
        return $this->belongsTo(Auxstatus::class, 'auxstatus', 'id');
    }
}
