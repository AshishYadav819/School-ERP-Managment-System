<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fees', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('student_id');

            $table->decimal('amount',10,2);

            $table->date('payment_date');

            $table->string('payment_mode');

            $table->text('remarks')->nullable();

            $table->timestamps();

            $table->foreign('student_id')
                  ->references('id')
                  ->on('students')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fees');
    }
};