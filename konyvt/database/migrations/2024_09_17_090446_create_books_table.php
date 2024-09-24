<?php

use App\Models\Books;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author');
            $table->string('title');
            $table->integer('pieces');
            $table->timestamps();
        });
        
        Books::create(['author'=>'Shakespear', 'title'=> 'The shaking of a spear', 'pieces' => 25]);
        Books::create(['author'=>'Roberto', 'title'=> 'Banananana', 'pieces' => 30]);
        Books::create(['author'=>'Bradford', 'title'=> 'Making of a man', 'pieces' => 50]);
        Books::factory()->count(7)->create();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
