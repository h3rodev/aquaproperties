<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offplans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->string('sub_title');
            $table->string('slug')->unique();

            $table->string('seo_title')->nullable();
            $table->string('seo_meta_tags')->nullable();
            $table->string('seo_meta_description')->nullable();

            $table->string('location');

            $table->text('main_description');
            $table->text('description');
            $table->text('list_of_projects');

            $table->string('featured_image')->nullable();

            $table->string('video_url')->nullable();

            $table->string('brochure_url')->nullable();
            $table->string('floor_plans_url')->nullable();

            $table->enum('developer', ['Emaar Properties','Damac Properties','Azizi Developments','Dubai Properties','Meraas Holding','Nshama Property Developer Dubai','Arada Property Developer','Sobha Group','Danube Properties','MAG Property Development','Eagle Hills','Aldar Properties','Select Group','Sharjah Holding','Nakheel Properties','Omniyat','Dubai Holding','Ellington Properties','District One','Majid Al Futtaim','Deyaar Properties','Falconcity of Wonders','Al Barari Developers','Dubai Sports City','Jumeirah Golf Estates','Samana Developers','Aqua Properties','Dubai South','Al Hamra Real Estate Developers','LIV Developers','Al Habtoor Group','Wasl Properties','SP International Property Developers'])->nullable();
            $table->enum('community', ['Dubai Hills Estate', 'Al Barari', 'Jumeirah Golf Estates', 'Palm Jumeirah', 'Dubai Marina', 'The Springs', 'Downtown Dubai', 'Arabian Ranches', 'Victory Heights', 'Town Square', 'The Views', 'The Meadows', 'The Lakes', 'The Greens', 'Motor City', 'Mira', 'Jumeirah Village Triangle', 'Jumeirah Village Circle', 'Jumeirah Islands', 'Jumeirah Lakes Towers', 'Jumeirah Beach Residence', 'Emirates Hills', 'Dubai International Financial Center', 'Damac Hills', 'City Walk', 'Business Bay' ])->nullable();

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
        Schema::dropIfExists('offplans');
    }
}
