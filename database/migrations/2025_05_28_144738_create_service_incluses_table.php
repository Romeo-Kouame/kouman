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
        Schema::create('service_inclus', function (Blueprint $table) {
            $table->id();
            $table->string('nom_service', 100);
            $table->enum('type_service', ['hebergement','vol','excursion','evenement']);
            $table->unsignedBigInteger('service_id');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_incluses');
    }
};
