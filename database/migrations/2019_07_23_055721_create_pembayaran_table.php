<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('atas_nama');
            $table->integer('jumlah');
            $table->enum('status',['0','1']);
            
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')
            ->on('users')
            ->references('id')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedInteger('zakat_id')->nullable();
            $table->foreign('zakat_id')
            ->on('zakats')
            ->references('id')
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('pembayaran');
    }
}
