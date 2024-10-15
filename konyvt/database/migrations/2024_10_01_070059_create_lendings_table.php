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
            $table->date('end')->nullable();
            $table->smallInteger('message');
            $table->timestamps();
        });

        Lending::create(['user_id'=> 1, 'copy_id'=> 1, 'start'=> 2020, 'end' => '2020-10-12', 'message' => 1]);
        Lending::create(['user_id'=> 1, 'copy_id'=> 2, 'start'=> 2022, 'end' => '2020-05-16', 'message' => 0]);
        Lending::create(['user_id'=> 2, 'copy_id'=> 2, 'start'=> 2023, 'end' => '2021-07-22', 'message' => 2]);
        Lending::create(['user_id'=> 2, 'copy_id'=> 3, 'start'=> 2019, 'end' => '2022-02-02', 'message' => 0]);
        Lending::create(['user_id'=> 3, 'copy_id'=> 1, 'start'=> 2015, 'end' => '2023-12-30', 'message' => 3]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lendings');
    }
};
