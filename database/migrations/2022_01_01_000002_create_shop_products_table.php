<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // Basic Fields
            $table->string('name', 255)->default('');
            $table->string('url', 255)->default(null)->nullable()->unique();
            $table->boolean('display')->default(false);
            // Additional Fields
            $table->string('title', 255)->default('');
            $table->string('description', 500)->default('');
            $table->string('h1', 255)->default('');
            $table->text('text')->nullable()->default(null);
            //
            $table->bigInteger('category_id')->unsigned()->nullable()->default(null)->index();
            $table->foreign('category_id')->references('id')->on('shop_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_products');
    }
}
