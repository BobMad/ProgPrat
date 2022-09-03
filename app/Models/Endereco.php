<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = ['endereco', 'pescador_id'];

    public function pescador(): BelongsTo
    {
        return $this->belongsTo(Pescador::class);
    }
}
