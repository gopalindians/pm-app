<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDobGenderPositionProfilePicToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('dob')->nullable()->describe('Date of birth');
            $table->enum('gender', ['m', 'f', 't', 'nd'])->nullable()->describe('Gender: Male, Female, Trans gender,Not disclosed');
            $table->text('position')->nullable()->describe('Position at which the user is working');
            $table->text('profile_image')->nullable()->describe('Profile image of the user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['dob', 'gender', 'position','profile_image']);
        });
    }
}
