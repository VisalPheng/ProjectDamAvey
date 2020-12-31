<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToProductsbyregionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productsbyregion', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productsbyregion', function (Blueprint $table) {
            $table->dropForeign('productbyregion_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
