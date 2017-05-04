<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    public $fillable = ['name','Amazon_Product_Link','Flipkart_Product_Link'];
}