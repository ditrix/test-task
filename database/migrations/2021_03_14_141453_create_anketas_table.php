<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnketasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anketas', function (Blueprint $table) {
            $table->id();

            
            $table->unsignedBigInteger('user_id')->nullable(false);
            

            $table->string('name', 100);

            $table->string('results_ref', 100);
            $table->text('content');
            $table->integer('count_results');

            $table->string('guestname', 50);
            $table->string('guestemail', 20);
            $table->string('guestphone', 20);
            
            $table->boolean('send_email');



            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('anketas');
    }
}
