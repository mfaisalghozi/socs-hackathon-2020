<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IdeaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Idea', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('userid');
            $table->foreign('userid')
                    ->references('id')
                    ->on('User')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('categoryid');
            $table->foreign('categoryid')
                            ->references('id')
                            ->on('Category')
                            ->onDelete('cascade');
            $table->string('ideaname', 50);
            $table->string('ideaimg', 255);
            $table->string('ideadescription', 255);
            $table->integer('ideatarget');
            $table->integer('currentearning');
            $table->integer('donatorcount');
            $table->date('ideadeadline');
            $table->string('qa', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Idea');
    }
}
