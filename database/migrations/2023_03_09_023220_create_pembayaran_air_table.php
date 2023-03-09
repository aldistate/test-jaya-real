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
        Schema::create('pembayaran_air', function (Blueprint $table) {
            $table->id('bill_id');
            $table->string('bill_name', 100);
            $table->string('bill_address', 10);
            $table->unsignedInteger('bill_periode');
            $table->date('bill_due_date');
            $table->string('bill_desc', 100);
            $table->decimal('bill_abonemen', 10, 2);
            $table->decimal('bill_air', 10, 2);
            $table->decimal('bill_ipl', 10, 2);
            $table->decimal('bill_disc_air', 10, 2);
            $table->decimal('bill_disc_ipl', 10, 2);
            $table->decimal('bill_denda', 10, 2);
            $table->decimal('bill_total_amount', 10, 2);
            $table->string('bill_resp_stat', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_air');
    }
};
