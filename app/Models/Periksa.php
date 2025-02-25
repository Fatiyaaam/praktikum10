<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Periksa extends Model
{
    use HasFactory;

    protected $table = 'periksa';
    protected $fillable = ['id', 'tanggal', 'berat', 'tinggi', 'tensi', 'keterangan', 'pasien_id', 'paramedik_id'];

}
