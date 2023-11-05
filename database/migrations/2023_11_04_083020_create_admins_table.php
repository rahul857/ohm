<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',10);
            $table->string('last_name',10);
            $table->string('present_address',30);
            $table->string('permanent_address',30);
            $table->text('email',15);
            $table->text('password',8)->unique();
            $table->text('city',20);
            $table->text('state',10);
            $table->string('zip_form',15);
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
        Schema::dropIfExists('admins');
    }
}
