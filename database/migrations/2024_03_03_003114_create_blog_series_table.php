<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_series', function (Blueprint $table) {
            $table->id();
            $table->foreignId('series_id');
            $table->foreignId('blog_id');
            $table->timestamps();
        });
    }
};
