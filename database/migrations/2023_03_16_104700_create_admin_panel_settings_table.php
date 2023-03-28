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
        Schema::create('admin_panel_settings', function (Blueprint $table) {
            $table->id();
            $table->string('system_name');
            $table->string('photo');
            $table->integer('active');
            $table->string('general_alert')->nullable();
            $table->string('address');
            $table->string('phone')->nullable();;
            $table->integer('added_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
            $table->string('com_code');
            $table->string('notes');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_panel_settings');
    }
};
