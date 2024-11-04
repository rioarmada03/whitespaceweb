<?php

// database/migrations/xxxx_xx_xx_create_ratings_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->text('description');
            $table->integer('rating');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}

