<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->decimal('discount_price', 8, 2)->nullable();
            $table->string('image');
            $table->json('screenshots')->nullable();
            $table->string('developer');
            $table->string('publisher');
            $table->date('release_date');
            $table->json('categories');
            $table->json('tags');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_free')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
};
