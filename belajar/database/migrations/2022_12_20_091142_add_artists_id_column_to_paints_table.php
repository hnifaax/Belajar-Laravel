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
        Schema::table('paints', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('artists_id')->required();

            $table->foreign('artists_id')->references('id')->on('artists')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paints', function (Blueprint $table) {
            //
            $table->dropForeign(['artists_id']);
            $table->dropColumn('artists_id');
        });
    }
};
