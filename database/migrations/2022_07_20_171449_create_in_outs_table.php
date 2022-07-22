<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_outs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_item')->nullable();
            $table->string('item_name')->nullable();
            $table->string('category')->nullable();
            $table->string('price')->nullable();
            $table->string('merk')->nullable();
            $table->string('quantity')->nullable();
            $table->string('total_price')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('in_outs');
    }
}
