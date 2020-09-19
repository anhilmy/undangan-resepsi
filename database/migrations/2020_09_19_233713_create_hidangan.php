<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHidangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hidangans', function (Blueprint $table) {
            $table->id();
            $table->string("nama", 50);
            $table->text("deskripsi");
            $table->integer("harga_per_porsi");
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hidangans');
        // Schema::table('hidangan', function (Blueprint $table) {
        //     //
        // });
    }
}
