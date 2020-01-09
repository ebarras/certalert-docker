<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->dateTimeTz('expiration_date');
            $table->dateTimeTz('valid_from_date');
            $table->string('issuer');
            $table->string('fingerprint');
            $table->json('san')->nullable();
            $table->bigInteger('agreement_id')->unsigned()->nullable();
            $table->foreign('agreement_id')->references('id')->on('agreements');
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
        Schema::dropIfExists('certificates');
    }
}
