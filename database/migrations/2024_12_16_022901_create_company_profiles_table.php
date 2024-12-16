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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->integer('id_company')->autoIncrement()->primaryKey();
            $table->string('company_name');
            $table->string('logo');
            $table->string('visi_company');
            $table->string('misi_company');
            $table->string('history');
            $table->string('addres');
            $table->string('phone_company');
            $table->string('email_company');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
