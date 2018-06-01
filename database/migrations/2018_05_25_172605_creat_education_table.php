<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('company');
            $table->date('start');
            $table->date('end');
            $table->string('roles');
            $table->string('accomplishments');
            $table->timestamps();
        });
        Schema::table('expeirnce', function (Blueprint $table) {
            $table->renameColumn('start-date', 'start');
            $table->renameColumn('end-date', 'start');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
