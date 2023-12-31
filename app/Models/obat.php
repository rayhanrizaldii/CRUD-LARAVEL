<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $fillable = ['nama_obat', 'harga_obat']; 
    protected $table="obat";
    
    public function pembelian()
    {
        return $this->hasMany(pembelian::class);
    }
}
