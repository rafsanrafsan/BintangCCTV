<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_Order extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $primaryKey = 'id_item_order';

    public function item()
    {
        return $this->belongsTo(Item::class,'id_item','id_item')->withTrashed();
    }
}
