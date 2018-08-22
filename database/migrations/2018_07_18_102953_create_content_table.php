<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('content', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('director');
            $table->string('producer');
            $table->string('OUR_WORK');
            $table->text('img_caption');
            $table->text('video_url');
            $table->text('img1');
            $table->text('img2');
            $table->text('img3');
            $table->text('img4');
            $table->text('img5');
            $table->text('img6');
            $table->integer('id_secondmenu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('content');
    }

}
