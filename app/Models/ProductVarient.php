<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVarient extends Model
{
    use HasFactory;
    protected $table = "product_varient";
    protected $fillable = ['product_id', 'varient', 'product_qty', 'mrp_price', 'offer_price'];
}
