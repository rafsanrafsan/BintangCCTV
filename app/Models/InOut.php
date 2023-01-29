<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InOut extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the items that owns the InOut
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function items(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'id_item', 'id_item')->withTrashed();
    }

    public function customers(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');    
    }
}
