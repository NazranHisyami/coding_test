<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiwayatPelatihan extends Model
{
    use HasFactory;

    protected $table = 'riwayat_pelatihans';

    protected $guarded = [];
}
