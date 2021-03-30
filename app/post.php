<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable=[
        'id','book_name','book_type','city','phone_number','user_id','book_img','trade_type'

    ];
    public $timestamps = false;
    protected $table = 'posts';

   

}
