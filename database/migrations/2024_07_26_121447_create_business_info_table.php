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
        Schema::create('business_info', function (Blueprint $table) {
            $table->id();
            $table->string('businesslogo')->nullable();
            $table->string('businessname');
            $table->string('businessemail');
            $table->integer('businessphone');
            $table->integer('businesstelephone');
            $table->string('businessfb');
            $table->string('businessig');
            $table->string('businessx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_info');
    }
};
