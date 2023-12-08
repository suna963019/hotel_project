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
        Schema::create('foods', function (Blueprint $table) {
            $table->id(); // オートインクリのID（プライマリーキー）
            $table->unsignedBigInteger('course_id'); // コースIDの外部キー下に制約
            $table->string('name'); // 料理名
            $table->string('type'); // 料理のタイプ（Main,Desert,Soup）
            
            // 外部キー制約
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            
            $table->timestamps(); // 作成日時と更新日時のカラム
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
};