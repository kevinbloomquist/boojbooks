<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //allows three protected key value fields to be fillable. Edited on 8.16.2017 git commit for easier manipulation during development. 
      protected $fillable = ['title','author','cover_url','pub_date'];

}
