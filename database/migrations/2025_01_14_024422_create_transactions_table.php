<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id'); // Relasi ke tabel products
            $table->unsignedInteger('user_id'); // Relasi ke tabel products
            $table->string('customer_name');
            $table->string('customer_contact'); // Kontak pelanggan
            $table->string('size');
            $table->integer('quantity'); // Jumlah produk yang dipesan
            $table->enum('status', ['pending', 'completed', 'cancelled'])->default('pending'); // Status transaksi
            $table->timestamps();

            // Relasi foreign key
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
