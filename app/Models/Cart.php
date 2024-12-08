<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ["users_id", "products_id", "quantity"];

    protected $with = ['product'];

    public function product()
    {
        return $this->hasOne(Product::class, "id", "products_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "users_id", "id");
    }

    public function getSubtotalAttribute()
    {
        return $this->product->price * ($this->quantity ?? 1);
    }

    public function scopeForUser($query, $userId)
    {
        return $query->where('users_id', $userId);
    }

    public function galleries()
    {
        return $this->hasManyThrough(
            Gallery::class,
            Product::class,
            'id', // Foreign key on Product table
            'product_id', // Foreign key on Gallery table
            'products_id', // Local key on Cart table
            'id' // Local key on Product table
        );
    }
}
