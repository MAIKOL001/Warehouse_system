<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warehouse_id')->nullable();
            $table->string('category');
            $table->foreignId('merchant_id')->constrained();
            $table->string('name');
            $table->integer('quality_pass')->default(0);
            $table->integer('quality_fail')->default(0);
            $table->foreignId('bin_id')->constrained();
            $table->integer('quantity')->default(0);
            $table->double('price')->nullable()->default(0);
            $table->string('admin_id')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
