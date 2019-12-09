<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayas', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->unsignedInteger('code');
            $table->string('name');
        });

        Schema::create('communes', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->unsignedInteger('Postal_code');
            $table->string('name');
            $table->integer('wilaya_id')->unsigned()->index();
            $table->foreign('wilaya_id')->references('id')->on('wilayas')->onDelete('cascade');
        });

        Schema::create('centers', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->integer('wilaya_id')->unsigned()->index();
            $table->integer('commune_id')->unsigned()->index();
            $table->string('name');
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
            $table->foreign('wilaya_id')
                ->references('id')->on('wilayas')->onDelete('cascade');
            $table->foreign('commune_id')
                ->references('id')->on('communes')->onDelete('cascade');
        });

        Schema::create('donators', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->integer('wilaya_id')->unsigned()->index();
            $table->integer('commune_id')->unsigned()->index();
            $table->integer('center_id')->unsigned()->index();

            $table->string('firstName');
            $table->string('lastName');
            $table->date('birthDay');
            $table->string('email');
            $table->string('phone');
            $table->string('bloodGroup');
            $table->timestamps();

            $table->foreign('wilaya_id')
                ->references('id')->on('wilayas')->onDelete('cascade');
            $table->foreign('commune_id')
                ->references('id')->on('communes')->onDelete('cascade');
            $table->foreign('center_id')
                ->references('id')->on('centers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wilayas');
        Schema::dropIfExists('communes');
        Schema::dropIfExists('centers');
        Schema::dropIfExists('donators');

    }
}
