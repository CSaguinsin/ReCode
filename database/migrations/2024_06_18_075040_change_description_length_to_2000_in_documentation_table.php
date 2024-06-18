<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDescriptionLengthTo2000InDocumentationTable extends Migration
{
    public function up()
    {
        Schema::table('documentation', function (Blueprint $table) {
            $table->string('description', 2000)->change();
        });
    }

    public function down()
    {
        Schema::table('documentation', function (Blueprint $table) {
            $table->string('description', 255)->change();
        });
    }
};
