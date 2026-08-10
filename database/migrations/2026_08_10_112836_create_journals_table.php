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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            //TODO: $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->uuid()->unique();
            $table->string('title');
            $table->longText('content')->nullable()->default('');

            $table->softDeletes();
            $table->timestamps();

            $table->index(['title']);
            $table->index(['title', 'created_at', 'updated_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};
