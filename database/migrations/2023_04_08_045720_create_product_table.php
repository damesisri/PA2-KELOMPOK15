<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('cover');
            $table->string('price', 10);
<<<<<<< HEAD
            $table->string('stock', 4);
=======
            // $table->string('stock', 3);
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
            $table->text('description');
            $table->enum('status', ['available', 'unavailable'])->default('available');
            $table->string('category');
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
        Schema::dropIfExists('products');
    }
}
