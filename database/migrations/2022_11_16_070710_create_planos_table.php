<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('planos', function (Blueprint $table) {
      $table->id();
      $table->string('nome')->unique();
      $table->string('url')->unique();
      $table->double('preco', 10, 2);
      $table->String('descricao')->nullable();
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
    Schema::dropIfExists('planos');
  }
};
