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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id')->onDelete('cascade');
            $table->string('name', 100);
            $table->decimal('total_cost', 10, 2);
            $table->foreignId('type_id')->constrained('project_types', 'id')->nullable();
            $table->foreignId('status_id')->constrained('project_status', 'id')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropConstrainedForeignId('user_id');
            $table->dropConstrainedForeignId('type_id');
            $table->dropConstrainedForeignId('status_id');
        });

        Schema::dropIfExists('projects');
    }
};
