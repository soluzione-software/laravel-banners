<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SoluzioneSoftware\Banners\Traits\HasContractsBindings;

class CreateBannersGroupsTable extends Migration
{
    use HasContractsBindings;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(static::getTable(), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }

    public static function getTable()
    {
        return static::resolveBannersGroupContract()->getTable();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(static::getTable());
    }
}
