<?php

use App\Models\Copies;
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
        Schema::create('copies', function (Blueprint $table) {
            $table->id('copy_id');
            $table->foreignId('book_id')->references('book_id')->on('books');
            $table->tinyInteger('hardcover')->default(0);
            $table->year('publicantion');
            $table->integer('status');
            $table->timestamps();
        });

        Copies::create(['book_id'=> 1, 'hardover'=> 0, 'publicantion'=> '1990', 'status'=> 0]);
        Copies::create(['book_id'=> 1, 'hardover'=> 1, 'publicantion'=> '1998', 'status'=> 1]);
        Copies::create(['book_id'=> 2, 'hardover'=> 1, 'publicantion'=> '2003', 'status'=> 0]);
        Copies::create(['book_id'=> 2, 'hardover'=> 0, 'publicantion'=> '2020', 'status'=> 0]);
        Copies::create(['book_id'=> 3, 'hardover'=> 0, 'publicantion'=> '2002', 'status'=> 1]);
        Copies::factory()->count(10)->create();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
