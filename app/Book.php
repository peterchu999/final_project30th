<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['id','book_name','book_category  ','book_year','owner_id'];

    public function owner(){
        return $this->belongsTo('App\User');
    }
}
