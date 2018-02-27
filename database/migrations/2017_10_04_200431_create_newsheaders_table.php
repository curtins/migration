<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsheadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsheaders', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('source');
            $table->string('code');
            $table->string('http');
            $table->string('nextfetch');
            $table->string('title');
            $table->string('feed');

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
        Schema::dropIfExists('newsheaders');
    }
}
