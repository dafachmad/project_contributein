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
            #$table->id();
            $table->id('id_user', 15);
            $table->char('username', 15)->unique();
            $table->string('password');
            $table->string('email', 40)->unique();
            $table->char('phone', 12)->unique();
            $table->date('joined_since');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
