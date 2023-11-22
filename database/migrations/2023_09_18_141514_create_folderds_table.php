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
        Schema::create('folderds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('department_id')->constrained();
            $table->foreignId('foldera_id')->constrained();
            $table->foreignId('folderb_id')->constrained();
            $table->foreignId('folderc_id')->constrained();
            $table->string('name')->nullable();
            $table->text('document')->nullable();
            $table->text('ext')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folderds');
    }
};
