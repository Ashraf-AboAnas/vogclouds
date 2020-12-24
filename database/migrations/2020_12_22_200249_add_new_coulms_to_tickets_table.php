<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewCoulmsToTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('ticket_id ');
            $table->unsignedBigInteger('Recivedby')->nullable();
            $table->date('RecivedDate')->nullable();
            $table->unsignedBigInteger('Recivedby2')->nullable();
            $table->date('RecivedDate2')->nullable();

            $table->foreign('user_id')->references('id')->on('user');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('Recivedby');
            $table->dropColumn('RecivedDate');
            $table->dropColumn('Recivedby2');
            $table->dropColumn('RecivedDate2');


        });
    }
}
