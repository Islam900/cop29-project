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
        Schema::create('dsngs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('period');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('vehicle_mounted');
            $table->string('vehicle_make');
            $table->string('vehicle_model');
            $table->string('vehicle_registration_number');
            $table->string('studio_name');
            $table->string('studio_city');
            $table->string('satellite_network');
            $table->string('satellite_orbital_position');
            $table->string('coder_equipment_manufacturer');
            $table->string('coder_equipment_model');
            $table->string('antenna_manufacturer');
            $table->string('antenna_model');
            $table->string('antenna_gain');
            $table->string('antenna_freq_range_start');
            $table->string('antenna_freq_range_end');
            $table->string('coder_freq_min');
            $table->string('coder_freq_max');
            $table->string('customs_clearance');
            $table->text('comments')->nullable();
            $table->integer('read_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dsngs');
    }
};
