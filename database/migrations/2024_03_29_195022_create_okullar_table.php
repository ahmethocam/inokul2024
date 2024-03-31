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
        Schema::create('okullar', function (Blueprint $table) {
            $table->id();
            $table->string("adi");
            $table->foreignIdFor(\App\Models\Kurum::class);
            $table->foreignIdFor(\App\Models\Kampus::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('okullar');
    }
};
