<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProProceso extends Model
{
    use HasFactory;

    protected $table = 'pro_procesos';
    
    protected $fillable = [];

    public function documentos()
    {
        return $this->hasMany(DocDocumento::class);
    }
}
