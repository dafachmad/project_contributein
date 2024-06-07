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
        Schema::create('detail_profile', function (Blueprint $table) {
            #$table->id();
            $table->unsignedInteger('id_user', 15);
            $table->string('first_name', 25)->nullable();
            $table->string('last_name', 25)->nullable();
            $table->char('gender', 1)->nullable()->checkIn(['M', 'F', 'N']);
            $table->date('date_birth')->nullable();
            $table->string('resume', 30)->nullable();
            $table->binary('profile')->nullable();
            $table->binary('background')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_profile');
    }
};
