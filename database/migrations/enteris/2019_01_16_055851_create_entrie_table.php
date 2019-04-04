<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entrie_date');
            $table->string('dr_cr');
            $table->string('ladger');
            $table->string('drAmount');
            $table->string('crAmount');
            $table->string('chequeNumber');
            $table->string('narration');
            $table->string('tag');
            $table->string('create_by');
            $table->string('balanced_cr_dr');
            $table->string('balanceds');
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
        Schema::dropIfExists('entrie');
    }
}
