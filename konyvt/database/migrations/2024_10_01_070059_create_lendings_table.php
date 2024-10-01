<?php

use App\Models\Lending;
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
        Schema::create('lendings', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('copy_id')->references('copy_id')->on('copies');
            $table->year('start');
            $table->timestamps();
        });

        Lending::create(['user_id'=> 1, 'copy_id'=> 1, 'start'=> 2020]);
        Lending::create(['user_id'=> 1, 'copy_id'=> 2, 'start'=> 2022]);
        Lending::create(['user_id'=> 2, 'copy_id'=> 2, 'start'=> 2023]);
        Lending::create(['user_id'=> 2, 'copy_id'=> 3, 'start'=> 2019]);
        Lending::create(['user_id'=> 3, 'copy_id'=> 1, 'start'=> 2015]);
        Lending::factory()->count(10)->create();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lendings');
    }
};
