<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rusak extends Model
{
    use HasFactory;

    public function barangruang()
    {
        return $this->belongsTo(BarangRuang::class);
    }
}
