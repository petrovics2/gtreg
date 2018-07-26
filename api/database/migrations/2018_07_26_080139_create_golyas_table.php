<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGolyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('golyas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nev');
            $table->string('email')->unique();
            $table->boolean('nem');
            $table->string('lakcim');
            $table->string('telefonszam')->unique();
            $table->string('szak');
            $table->string('allergia')->nullable();
            $table->string('etel')->nullable();
            $table->string('polomeret');
            $table->boolean('kedd');
            $table->boolean('szerda');
            $table->boolean('csutortok');
            $table->boolean('pentek');
            $table->boolean('szombat');
            $table->string('egyeb')->nullable();
            $table->string('code')->nullable()->default(null);
            $table->boolean('golyae')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('golyas');
    }
}
