<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sub_title');
            $table->string('slug')->unique();

            $table->string('seo_title')->nullable();
            $table->string('seo_meta_tags')->nullable();
            $table->string('seo_meta_description')->nullable();

            $table->string('location');

            $table->text('main_description');
            $table->text('description')->nullable();
            $table->text('list_of_projects')->nullable();

            $table->string('featured_image')->nullable();
            $table->string('logo')->nullable();

            $table->string('video_url')->nullable();

            $table->string('brochure_url')->nullable();
            $table->string('floor_plans_url')->nullable();

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
        Schema::dropIfExists('developers');
    }
}
