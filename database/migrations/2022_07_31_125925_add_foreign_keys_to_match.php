<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('match', function (Blueprint $table) {
            $table->foreign('clubs_id', 'clubs_id_fk1')->references('id')->on('clubs')->onUpdate('CASADE')->onDelete('RESTRICT');
            $table->foreign('rivals_id', 'rivals_id_fk2')->references('id')->on('clubs')->onUpdate('CASADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('match', function (Blueprint $table) {
            $table->dropForeign('clubs_id_fk1');
            $table->dropForeign('rivals_id_fk2');
        });
    }
}
