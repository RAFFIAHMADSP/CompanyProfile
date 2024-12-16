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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->integer('id_testimonials')->autoIncrement()->primaryKey();

            $table->string('id_products');
            $table->foreign('id_products')
                ->references('id_products')
                ->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('client_name');
            $table->string('client_company');
            $table->string('testimonial');
            $table->string('testimonial');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
