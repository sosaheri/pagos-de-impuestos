<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentIdMerchantIdToFinanciamientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('financiamientos', function (Blueprint $table) {
            $table->string('PaymentId');
            $table->string('MerchantId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('financiamientos', function (Blueprint $table) {
            //
        });
    }
}
