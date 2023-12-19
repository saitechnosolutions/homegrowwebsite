<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductOrderUserAddress extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'order_id', 'address_line_one', 'address_line_two', 'landmark', 'area_id', 'city', 'address_phone_number', 'address_type_id', 'address_type_name', 'address_type_others_name'];
    public function productOrder(): BelongsTo
    {
        return $this->belongsTo(ProductOrder::class, "order_id", "order_id");
    }
}
