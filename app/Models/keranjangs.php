<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\produks;

class keranjangs extends Model
{
    use HasFactory;
    public function produks()
{
    return $this->belongsTo(produks::class, 'id_produk');
}
}

