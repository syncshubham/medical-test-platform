<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tests', function (Blueprint $table) {
            // Add column for image path
            $table->string('test_image')->nullable();

            // Add column for number
            $table->unsignedInteger('parameters')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tests', function (Blueprint $table) {
            // Drop the added columns if migration is rolled back
            $table->dropColumn('test_image');
            $table->dropColumn('parameters');
        });
    }
};
