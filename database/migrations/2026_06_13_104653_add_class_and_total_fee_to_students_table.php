<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {

            $table->string('class')->nullable()->after('name');

            $table->decimal('total_fee', 10, 2)
                  ->default(0)
                  ->after('class');

        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {

            $table->dropColumn([
                'class',
                'total_fee'
            ]);

        });
    }
};