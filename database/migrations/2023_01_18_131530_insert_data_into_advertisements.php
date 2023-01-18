<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('advertisements')->insert(
            [
                [
                'name' => 'Used PS5',
                'description' => 'I have been playing with this PS5 for the last 2 years, but now I want to sell it.',
                'price' => 400,
                'category_id' => '1'
                ],
                [
                'name' => 'Used HD TV',
                'description' => 'This is a used HD TV. I have been using this TV for 5 years, but now I want to sell it.',
                'price' => 350,
                'category_id' => '1'
                ]
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
