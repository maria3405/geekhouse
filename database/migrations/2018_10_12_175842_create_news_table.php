<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->text('body');
			$table->string('url');
			$table->integer('category_id') ->nullable();
			$table->string('status') ->nullable();
			$table->integer('user_id');
			$table->enum('long',['ru','en']) ->default('ru');
			
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
        Schema::drop('news');
    }
}
