<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table ='offers' ; // we put it if use other name 
    protected $fillable = ['name','price','photo','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    // public $timestamps = true ; 
}
