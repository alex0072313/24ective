<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('alias')->unique()->nullable();

            $table->string('title')->nullable();
            $table->string('long_title')->nullable();

            $table->text('description')->nullable();

            $table->json('plains')->nullable();
            $table->json('apparts')->nullable();
            $table->json('position')->nullable();

            $table->text('worker')->nullable();

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
        Schema::dropIfExists('zks');
    }
}
