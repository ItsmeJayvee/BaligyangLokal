<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertColors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('colors')->insert([
            ['color' => 'Yellow'],
            ['color' => 'Black'],
            ['color' => 'Green'],
            ['color' => 'Brown'],
            ['color' => 'Blue'],
            ['color' => 'Pink'],
            ['color' => 'Violet'],
            ['color' => 'White'],
            ['color' => 'Red'],
            ['color' => 'Orange'],
            ['color' => 'Gray'],
            ['color' => 'Purple'],
        ]);
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
