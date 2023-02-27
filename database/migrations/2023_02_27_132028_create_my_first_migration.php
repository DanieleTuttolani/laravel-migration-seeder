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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->char('code' , 15)->unique();
            $table->char('departure', 80);
            $table->char('arrival', 80);
            $table->time('departure_H');
            $table->time('arrival_H');
            $table->smallInteger('Number_of_carriages')->nullable();
            $table->boolean('on_time')->nullable();
            $table->boolean('on_retard')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('trains');
    }
};
