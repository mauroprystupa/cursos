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
            $table->id();/* integer unsigned increment => entero sin signo y autoincrementa*/
            $table->string('name');/* varchar, con 250 caracteres */
            $table->string('email')->unique();/* unico, no se repite el email */
            $table->timestamp('email_verified_at')->nullable();/*guarda las fechas, verificacion de correo electronico  
            siempre que le pasamos un campo que puede quedar vacio le pasamos nulable*/
            $table->string('password');/* contrasena */
            $table->string('avatar');
            $table->string('apodo');
            $table->rememberToken();/* mantener la sesion iniciada */
            $table->timestamps();/* created_at updated_at, cuando se creo y cuando se modifico */
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
