<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issuelog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bookid');
            $table->string('studentid');
            $table->string('issuedby');
            $table->string('status');
            $table->string('returntime');





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
        Schema::drop('issuelog');
    }
}
