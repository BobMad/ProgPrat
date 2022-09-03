<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pescador extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'avatar'];

    public function enderecos(): HasMany
    {
        return $this->hasMany(endereco::class, 'pescador_id');
    }
}
