<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schemaクラスでcreateメソッドを実行する contact_formsというテーブルが作成される
        Schema::create('contact_forms', function (Blueprint $table) {
            //作成するカラムを記述
            $table->id();
            $table->string('name',20);//氏名
            $table->string('email',255);//メールアドレス
            $table->longText('url')->nullable();
            $table->boolean('gender');
            $table->integer('age')->unsigned();
            $table->string('contact',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_forms');
    }
};
