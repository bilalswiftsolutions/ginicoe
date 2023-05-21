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
        Schema::table('services', function (Blueprint $table) {
            $table->string('description', 10000000)->change();
        });

        Schema::table('dynamic_pages', function (Blueprint $table) {
            $table->string('dynamic_page_content', 10000000)->change();
        });
        Schema::table('page_about_items', function (Blueprint $table) {
            $table->string('detail', 10000000)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            // $table->string('description')->change();
        });
    }
};
