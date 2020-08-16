<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSertifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikasis', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 250);
            $table->string('id_sertification', 100)->unique();
            $table->longText('address');
            $table->string('standard', 100);
            $table->string('submit', 100);
            $table->string('survailance1', 100);
            $table->string('survailance2', 100);
            $table->string('expire_date', 100);
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
        Schema::dropIfExists('sertifikasis');
    }
}
