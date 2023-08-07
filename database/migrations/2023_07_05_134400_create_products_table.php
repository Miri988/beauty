<?php

use App\Models\Category;
use App\Models\Image;
use App\Models\Order;
use App\Models\Review;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->unsignedTinyInteger('rating');
            $table->integer('price')->unsigned();
            $table->text('description');
            $table->string('size');
            $table->integer('quantity')->unsigned();
            $table->string('vendor_code');
            $table->text('specification');
            $table->text('ingredients');
            $table->text('use');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
