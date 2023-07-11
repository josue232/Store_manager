<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_lines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productAffectation_id')->default(null);
            $table->float('quantity');
            $table->float('value');
            $table->timestamps();

            $table->foreign('productAffectation_id')->references('id')->on('product_affectations')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('input_lines');
    }
}
