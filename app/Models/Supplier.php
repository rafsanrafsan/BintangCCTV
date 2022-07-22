<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\DAtabase\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use HasFactory, SoftDeletes;
    protected $primaryKey = 'id_supplier';
    protected $fillable = [
        'id_supplier','supplier_name','contact','address'
    ];
}
