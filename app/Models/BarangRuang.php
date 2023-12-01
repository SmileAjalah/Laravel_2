<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangRuang extends Model
{
    use HasFactory;

    protected $table = 'barangruangs';
    protected $guarded = ['id'];

    public function pinjaman()
    {
        return $this->belongsTo(Pinjaman::class);
    }

}
