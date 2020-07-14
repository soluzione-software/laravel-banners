<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SoluzioneSoftware\Banners\Traits\HasContractsBindings;

class CreateBannersTable extends Migration
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
            $table->bigIncrements(static::resolveBannerContract()->getKeyName());
            $table->timestamps();

            $table->unsignedBigInteger('banners_group_id');

            $table
                ->foreign('banners_group_id')
                ->references('id')
                ->on(static::resolveBannersGroupContract()->getTable());
        });
    }

    public static function getTable()
    {
        return static::resolveBannerContract()->getTable();
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
