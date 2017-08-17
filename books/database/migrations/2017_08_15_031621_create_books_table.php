<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* Edited on 8.16.2017 commit for easier manipulation during development. Model to be expanded once full clean paths to DB are built
        Note: id is conventionally recognized as primary key... use $primarykey in the future for something more proprietary. Clean up formats: Change type for date add setAttributes for capitalization of title and author.*/
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->string('cover_url');
            $table->string('pub_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
