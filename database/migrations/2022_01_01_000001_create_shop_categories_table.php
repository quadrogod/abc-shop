<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_categories', function (Blueprint $table) {
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
            // Tree Fields
            $table->bigInteger('parent')->nullable()->default(null);
            $table->integer('left_key')->nullable()->default(null);
            $table->integer('right_key')->nullable()->default(null);
            $table->integer('level')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shop_categories');
    }
}
