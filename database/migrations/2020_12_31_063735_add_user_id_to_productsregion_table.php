<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToProductsregionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productsregion', function (Blueprint $table) {
            $table->foreignid('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productsregion', function (Blueprint $table) {
            $table->dropForeign('productsregion_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
