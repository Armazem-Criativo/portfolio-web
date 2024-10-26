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
        Schema::create('home_texts', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('acting');
            $table->longtext('aboutme');
            $table->string('git_btn_label')->nullable();
            $table->string('git_btn_link')->nullable();
            $table->string('linkedin_btn_label')->nullable();
            $table->string('linkedin_btn_link')->nullable();
            $table->string('curriculum_btn_label')->nullable();
            $table->string('curriculum_btn_link')->nullable();
            $table->text('tech_title');
            $table->text('project_title');
            $table->text('contact_title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_texts');
    }
};
