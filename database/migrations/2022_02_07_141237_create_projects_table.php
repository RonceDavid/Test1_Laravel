<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->date('date_prise_contact');
            $table->date('date_semis');
            $table->date('date_recolte');
            $table->string('etape_courante');
            $table->boolean('isUpdate');
            $table->string('localisation');
            $table->string('pays');
            $table->string('name');
            $table->string('region');
            $table->string('status');
            $table->integer('superficy');
            $table->integer('plantId');
            $table->integer('FarmerId');
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
        Schema::dropIfExists('projects');
    }
}
