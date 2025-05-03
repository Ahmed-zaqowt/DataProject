<?php

namespace App\Models;

use Database\Factories\OrderItemFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return OrderItemFactory::new();
    }
}
