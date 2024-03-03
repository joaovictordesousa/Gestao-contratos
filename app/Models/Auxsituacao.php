<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Auxsituacao extends Model
{
    use HasFactory;

    protected $table = 'auxsituacao';

    protected $fillable = [
        'situacao'
    ];

    public function Auxsituacao(): BelongsTo {
        return $this->belongsTo(Auxsituacao::class, 'auxsituacao', 'id');
    }
}
