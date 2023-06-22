<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocDocumento extends Model
{
    use HasFactory;

    protected $table = 'doc_documentos';

    protected $fillable = [];

    public function proceso()
    {
        return $this->belongsTo(ProProceso::class);
    }

    public function tipoDocumento()
    {
        return $this->belongsTo(TipTipoDoc::class);
    }

   
}
