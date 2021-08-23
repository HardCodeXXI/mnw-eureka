<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('google_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('whatsappnumber')->nullable();
            $table->string('access_level');
            $table->string('title')->nullable();
            $table->string('status');
            //regstrationevent
            $table->string('name_for_certificate')->nullable();
            $table->string('university_institution')->nullable();
            $table->string('major_position')->nullable();
            $table->integer('graduation_year')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_linkedin')->nullable();
            //seekoppotunnities
            $table->string('current_company')->nullable();
            $table->string('current_role')->nullable();
            $table->string('how_long_in_role')->nullable();
            $table->string('how_long_working')->nullable();
            $table->string('cv_file')->nullable();
            $table->string('email_status')->nullable();
            //endofopportunities
            $table->rememberToken();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
