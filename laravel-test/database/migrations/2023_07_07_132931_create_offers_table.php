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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->integer('b24_contact_id');
            $table->integer('b24_deal_id');
            $table->integer('b24_manager_id');
            $table->string('manager');
            $table->text('position');
            $table->text('phone');
            $table->text('avatar');
            $table->string('status')->default('Новая');
            $table->date('date_end')->default('2023-07-08');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
