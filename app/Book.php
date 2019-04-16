<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
<<<<<<< HEAD
    protected $fillable = ['id','book_name','book_category','book_year','owner_id'];

    public function owner(){
        return $this->hasMany('App\User');
    }
=======
    protected $fillable = ['id','book_name','book_category','book_year'];
>>>>>>> 03776cbf0d3e43609014f9ec9180918eb8d5fbd6
}
