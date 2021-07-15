<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('contents', function (Blueprint $table) {
      $table->Increments('id');
      $table->unsignedInteger('contents_category');
      $table->string('title', 255);
      $table->text('content')->nullable();
      $table->unsignedInteger('news_category')->nullable();
      $table->string('image_path', 255)->nullable();
      $table->string('video_url', 255)->nullable();
      $table->unsignedInteger('applicant_id')->nullable();
      $table->unsignedInteger('process_status');
      $table->boolean('already_read_status')->nullable();
      $table->unsignedInteger('approver_id')->nullable();
      $table->integer('trace_contents_id')->nullable();
      $table->string('reason_disapproval', 255)->nullable();
      $table->timestamps();
      $table->dateTime('released_at')->nullable();
      $table->softDeletes();
      //外部キー
      $table->foreign('contents_category')->references('id')->on('contents_category');
      $table->foreign('news_category')->references('id')->on('news_category');
      $table->foreign('applicant_id')->references('id')->on('users');
      $table->foreign('process_status')->references('id')->on('process_status');
      $table->foreign('approver_id')->references('id')->on('users');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('contents');
  }
}
