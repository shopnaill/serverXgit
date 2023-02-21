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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon_url');
            $table->string('description')->nullable();
            $table->string('url')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('server')->nullable();
            $table->string('port')->nullable();
            $table->string('password')->nullable();
            $table->string('username')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
