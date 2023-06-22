<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipTipoDoc extends Model
{
    use HasFactory;

    protected $table = 'tip_tipo_docs';

    protected $fillable = [];

    public function documentos()
    {
        return $this->hasMany(DocDocumento::class);
    }
}
