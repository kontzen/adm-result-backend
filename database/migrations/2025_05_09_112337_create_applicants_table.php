<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('course');
            $table->enum('status', ['PASSED', 'FAILED']);
            $table->enum('letter_status', ['GENERATED', 'SENT'])->default('GENERATED');
            $table->string('letter_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};

