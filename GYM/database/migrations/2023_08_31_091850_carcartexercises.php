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
        Schema::create('cartexercises', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('exercise_id');
            $table->string('coach_id');
            $table->string('requist_id');
            $table->string('repetion');
            $table->string('day');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
