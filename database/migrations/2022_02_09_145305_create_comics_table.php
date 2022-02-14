<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('comics', function (Blueprint $table) {
      $table->id();
      //
      $table->string("title", 100)->unique();
      $table->string("series", 100);
      $table->string("type", 50);
      $table->text("description");
      $table->string("link")->nullable();
      $table->date("sale_date");
      $table->unsignedDecimal("price", 8, 2);
      //
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
    Schema::dropIfExists('comics');
  }
}
