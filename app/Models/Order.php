<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'id_order', 'no_invoice', 'id_supplier',
        'address', 'status', 'description',
    ];
    protected $primaryKey = 'id_order';

    public function item()
    {
        return $this->hasMany(Item_Order::class,'id_order','id_order');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id_supplier')->withTrashed();
    }
}
