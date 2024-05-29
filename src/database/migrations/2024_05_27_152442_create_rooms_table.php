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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id()->primary();
            $table->tinyInteger('type');
            $table->tinyInteger('status');
            $table->string('description');
            $table->decimal('price');
            $table->timestamps();
        });
        if (!app()->environment('production'))
            Artisan::call('db:seed', [
                '--class' => RoomsTableSeeder::class
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
