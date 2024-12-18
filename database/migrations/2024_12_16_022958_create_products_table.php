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
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id_products')->autoIncrement()->primarykey();

            
            $table->integer('id_services');
            $table->foreign('id_services')
                ->references('id_services')
                ->on('services')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('name_product');
            $table->string('descriptions_product');
            $table->string('images');
            $table->integer('price');
            $table->string('destination_countries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
