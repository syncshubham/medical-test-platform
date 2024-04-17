<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assignedtests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('test_id');
            $table->unsignedBigInteger('lab_id');
            $table->decimal('lab_rate', 10, 2);
            $table->decimal('final_rate', 10, 2);
            $table->timestamps();

            $table->foreign('test_id')->references('id')->on('tests');
            $table->foreign('lab_id')->references('id')->on('users')
                  ->whereExists(function ($query) {
                      $query->select('model_id')
                            ->from('model_has_roles')
                            ->whereRaw('model_id = users.id')
                            ->where('role_id', 3); // Assuming role ID 3 is for labs
                  });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigned_test');
    }
};
