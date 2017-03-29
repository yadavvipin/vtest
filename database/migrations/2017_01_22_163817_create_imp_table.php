<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author');
            $table->string('book_title');
			$table->string('type');
			$table->string('edition');
			$table->string('place_publication');
			$table->string('year');
			$table->string('pages');
			$table->string('cost');
			$table->string('category');
            $table->string('quantity');
			$table->string('almira_no');
            $table->string('rek_no');
			
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
        Schema::drop('book');
    }
}
