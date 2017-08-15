<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
      protected $fillable = ['title','author','pub_name','pub_website','pub_date','pub_specs','cover_url','preview_text_url'];

}
