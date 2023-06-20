<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableVendasChangeValorColumn extends Migration
{
    public function up()
    {
        Schema::table('vendas', function (Blueprint $table) {
            $table->decimal('valor', 10, 2)->change();
        });
    }

    public function down()
    {
        Schema::table('vendas', function (Blueprint $table) {
            $table->double('valor')->change();
        });
    }
}
