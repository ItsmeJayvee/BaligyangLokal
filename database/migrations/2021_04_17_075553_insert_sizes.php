<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertSizes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('sizes')->insert([
            ['size' => 'x-small'],
            ['size' => 'small'],
            ['size' => 'medium'],
            ['size' => 'large'],
            ['size' => 'x-large'],
            ['size' => 'xx-large']
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
