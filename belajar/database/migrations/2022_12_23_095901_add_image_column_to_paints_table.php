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
            $table->string('image', 20)->required()->after('rating');

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
            $table->dropColumn('jenis-kelamin');
        });
    }
};
