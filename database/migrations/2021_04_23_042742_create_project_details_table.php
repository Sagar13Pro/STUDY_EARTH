<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_details', function (Blueprint $table) {
            $table->id();
            $table->string('projectType');
            $table->string('projectLanguage');
            $table->string('projectTitle');
            $table->longText('projectContent');
            $table->longText('requirements');
            $table->integer('projectPrice')->nullable();
            $table->string('file_path', 255);
            $table->string('tag_1', 100)->nullable();
            $table->string('tag_2', 100)->nullable();
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
        Schema::dropIfExists('project_details');
    }
}
