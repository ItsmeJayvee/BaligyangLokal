<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categories')->insert([
            ['category' => "Men's Apparel", 'link' => 'mensapparel'],
            ['category' => "Women's Apparel", 'link' => 'womensapparel'],
            ['category' => "Men's Shoes", 'link' => 'mensshoes'],
            ['category' => "Women's shoes", 'link' => 'womensshoes'],
            ['category' => "Toddlers", 'link' => 'toddlers'],
            ['category' => "Electronics", 'link' => 'electronics'],
            ['category' => "Kitchen", 'link' => 'kitchen']
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
