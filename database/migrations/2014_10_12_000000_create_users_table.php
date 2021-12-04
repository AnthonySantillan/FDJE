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
<<<<<<< HEAD
            $table->timestamps();
            $table->string('dni')->unique();
            $table->string('name')->nullable();
            $table->string('phone');
            $table->string('password');
            $table->rememberToken();
=======
            $table->string('name');
            $table->string('ci')->unique();
            $table->timestamp('ci_verified_at')->nullable();
            $table->string('phone');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
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
