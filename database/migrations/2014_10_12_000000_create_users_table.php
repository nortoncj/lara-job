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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('bio')->nullable();
            $table->string('image')->default('pic.jpg');
            $table->string('cv')->nullable();
            $table->string('email')->unique();
            $table->string('job_title')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('role');
            $table->date('user_trial')->nullable();
            $table->date('billing_ends')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('plan')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
