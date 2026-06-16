<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('admission_no')->unique();
        $table->string('name');
        $table->date('dob');
        $table->string('gender');
        $table->string('mobile');
        $table->string('email')->nullable();
        $table->text('address')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
