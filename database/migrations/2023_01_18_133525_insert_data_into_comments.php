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
        DB::table('comments')->insert([
            [
                'content' => 'This product does not look good at all. It looks completely woren out. Not worth the price.',
                'advertisement_id' => 1
            ],
            [
                'content' => 'I think it looks alright. I would not pay the full price though.',
                'advertisement_id' => 1
            ]
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
};
