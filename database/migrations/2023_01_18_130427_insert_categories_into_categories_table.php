<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categories')->insert(
            [
                'name' => 'Electronics',
                'description' => 'Here you can put any type of electronics from phones, to old TVs, that you dont use.'
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Furniture',
                'description' => 'This is a category for any type of furniture from unused sofas to old chairs.'
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Jewelry',
                'description' => 'This category is for jewelry. It includes anything from earrings to simple rings.'
            ]
        );
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
};
