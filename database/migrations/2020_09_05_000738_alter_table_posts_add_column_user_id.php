<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTablePostsAddColumnUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //$table->bigIncrements('id');
           //criando campo chave estrangeira
            $table->unsignedBigInteger('user_id')->after('id');

            //definindo a chave estrangeira
            $table->foreign('user_id')->references('id')->on('users');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //removendo a chave estrangeira se der ruim(table_columnname_foreign)
            $table->dropForeign('posts_user_id_foreign');
        });
    }
}
