<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Category', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('ideaid');
            $table->foreign('ideaid')
                    ->references('id')
                    ->on('Idea')
                    ->onDelete('cascade');
            $table->string('category', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Category');
    }
}
