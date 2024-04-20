<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('path_image')->nullable();
            $table->string('path_url')->nullable();

            // Agregar la clave foránea para la relación con categoria_banners
            $table->unsignedBigInteger('categoria_banner_id');
            $table->foreign('categoria_banner_id')->references('id')->on('categoria_banners')->onDelete('cascade');
            
            $table->softDeletes();
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
        Schema::dropIfExists('banner');
    }
}
