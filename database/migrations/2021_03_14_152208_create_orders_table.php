<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('phone', 20);            
            $table->text('content');
            $table->unsignedBigInteger('anketa_id')->nullable();
            $table->foreign('anketa_id')->references('id')->on('anketas')->onDelete('set null');
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
        Schema::dropIfExists('orders');
    }
}
