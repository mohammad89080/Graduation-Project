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
        Schema::create('inv_itemcard', function (Blueprint $table) {
            $table->id();
            $table->integer('item_code');
            $table->string('barcode');
            $table->string('name');
            $table->tinyInteger('item_type')->default(1);
            $table->integer('inv_itemcard_categories_id');
            $table->integer('parent_inv_itemcard_id')->nullable();
            $table->tinyInteger('does_has_retailunit');
            $table->integer('retail_uom_id')->nullable();
            $table->integer('uom_id');
            $table->decimal('retail_uom_quntToParent')->nullable();
            $table->timestamps();
            $table->integer('added_by');
            $table->integer('updated_by')->nullable();
            $table->integer('com_code');
            $table->date('date')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->decimal('price');
            $table->decimal('nos_gomla_price');
            $table->decimal('gomla_price');
            $table->decimal('price_retail')->nullable();
            $table->decimal('nos_gomla_price_retail')->nullable();
            $table->decimal('gomla_price_retail')->nullable();
            $table->decimal('cost_price');
            $table->decimal('cost_price_retail')->nullable();
            $table->tinyInteger('has_fixced_price')->default(1);
            $table->decimal('All_QUENTITY')->nullable();
            $table->decimal('QUENTITY')->nullable();
            $table->decimal('QUENTITY_Retail')->nullable();
            $table->decimal('QUENTITY_all_Retails')->nullable();
            $table->string('photo')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inv_itemcard');
    }
};
