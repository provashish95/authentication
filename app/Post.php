<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'customer_id', 'category_id', 'title','description',
    ];
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
