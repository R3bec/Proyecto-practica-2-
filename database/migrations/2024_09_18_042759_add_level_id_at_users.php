<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::table('users', function(Blueprint $table) {
            
            $table->bigInteger('level_id')->unsigned()
                ->nullable()
                ->after('id');
            $table->dropColumn('level_id');

            $table->foreign('level_id')->references('id')->on('level')
               ->onDelete('set null')
               ->onUpdate('cascade');

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
};
