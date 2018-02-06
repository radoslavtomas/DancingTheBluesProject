<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('author_id');
			$table->string('title');
			$table->string('seo_title')->nullable();
			$table->string('venue');
			$table->date('start_date');
			$table->date('end_date')->nullable();
			$table->text('excerpt');
			$table->text('body');
			$table->text('map')->nullable();
			$table->string('image')->nullable();
			$table->string('slug')->unique();
			$table->text('meta_description');
			$table->text('meta_keywords');
			$table->boolean('featured')->default(0);
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
        Schema::dropIfExists('events');
    }
}
