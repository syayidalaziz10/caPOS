<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';

    protected $fillable = ['id_user','tanggal_pemesanan','id_meja','total_biaya'];
}
