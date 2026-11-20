<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('cacti', function (Blueprint $table) {
            $table->string('name', 120);
            $table->enum('type', ['harcos', 'varazslo', 'sarkany']);
            $table->unsignedInteger('dmg');
            $table->unsignedInteger('speed');
            $table->unsignedInteger('mana');
            $table->unsignedInteger('hp');
            $table->string('owner', 120);
            $table->string('image_path');
            $table->foreignId('hat_id')->nullable()->constrained('hats')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('cacti', function (Blueprint $table) {
            $table->dropForeign(['hat_id']);
            $table->dropColumn(['name', 'type', 'dmg', 'speed', 'mana', 'hp', 'owner', 'image_path', 'hat_id']);
        });
    }
};
