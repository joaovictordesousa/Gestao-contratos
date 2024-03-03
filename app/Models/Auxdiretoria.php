<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Auxdiretoria extends Model
{
    use HasFactory;

    protected $table = 'auxdiretoria';

    protected $fillable = [
        'diretoria'
    ];

    public function Auxdiretoria(): BelongsTo {
        return $this->belongsTo(Auxdiretoria::class, 'auxdiretoria', 'id');
    }
}
