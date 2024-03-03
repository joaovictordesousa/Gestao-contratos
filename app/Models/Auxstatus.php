<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Auxstatus extends Model
{
    use HasFactory;

    protected $table = 'auxstatus';

    protected $fillable = [
        'status'
    ];

    public function Auxstatus(): BelongsTo {
        return $this->belongsTo(Auxstatus::class, 'auxstatus', 'id');
    }
}
