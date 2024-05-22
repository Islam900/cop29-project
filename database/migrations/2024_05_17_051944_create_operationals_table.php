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
        Schema::create('operationals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('service_type');
            $table->string('period');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('in_out_use');
            $table->string('manufacturer');
            $table->string('hand_model');
            $table->string('hand_units');
            $table->string('belt_pack_model');
            $table->string('belt_pack_units');
            $table->string('power_output');
            $table->string('antenna_height')->nullable();
            $table->string('antenna_gain')->nullable();
            $table->string('frequency_range_start');
            $table->string('frequency_range_end');
            $table->string('tuning_step');
            $table->string('bandwidth');
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
        Schema::dropIfExists('operationals');
    }
};
