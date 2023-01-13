<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_ru');
            $table->string('name_uz');
            $table->longText('description_ru');
            $table->longText('description_uz');
            $table->string('image');
            $table->float('price');
            $table->float('old_price')->default(0);
            $table->string('category_id');
            $table->boolean('isSale')->default(0);
            $table->date('discount')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
