<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPemesanan extends Model
{
    use HasFactory;
    
    protected $table = 'detail_pemesanan';
    protected $primaryKey = 'id_detail';

    protected $fillable = ['id_pemesanan','id_menu','jumlah'];
}
