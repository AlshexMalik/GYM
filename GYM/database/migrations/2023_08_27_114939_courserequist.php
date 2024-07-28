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
        Schema::create('courserequist', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('cover_text')->nullable();
            $table->string('hight');
            $table->string('wieght');
            $table->string('coach');
            $table->enum('statuse',['active','deactive'])->default('active');
            $table->string('up_front');
            $table->string('up_back');
            $table->string('up_left');
            $table->string('up_right');
            $table->string('do_front');
            $table->string('do_back');
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
