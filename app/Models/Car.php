<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Car extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'title',
       'content',
        'Luggage',
        'Doors',
        'Passengers',
        'price',
        'Active',
        'image',
        'category_id'
    ];//we use the names in the schema of tables
    
        public function category(){
            return $this->belongsTo(Category::class);//to connect THE TWO MODELS TO USE IT  TO OBTAIN CATEGORY DATA
        }
}
