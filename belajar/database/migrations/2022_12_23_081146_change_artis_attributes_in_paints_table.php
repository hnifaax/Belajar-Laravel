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
            $table->renameColumn('artis', 'rating');
            $table->string('artis', 10)->change();
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
            $table->renameColumn('rating', 'artis');
            $table->string('artis', 255)->change();
        });
    }
};
