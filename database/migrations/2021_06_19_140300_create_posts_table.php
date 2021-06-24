<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            // VCell
            $table->double('VoltageCell_1');
            $table->double('VoltageCell_2');
            $table->double('VoltageCell_3');
            $table->double('VoltageCell_4');
            $table->double('VoltageCell_5');
            $table->double('VoltageCell_6');
            $table->double('VoltageCell_7');
            $table->double('VoltageCell_8');
             //TCell
            $table->double('TemperatureCell_1');
            $table->double('TemperatureCell_2');
            $table->double('TemperatureCell_3');
            $table->double('TemperatureCell_4');
            $table->double('TemperatureCell_5');
            $table->double('TemperatureCell_6');
            $table->double('TemperatureCell_7');
            $table->double('TemperatureCell_8');
            // StatusV
            $table->boolean('VoltageStatus_1');
            $table->boolean('VoltageStatus_2');
            $table->boolean('VoltageStatus_3');
            $table->boolean('VoltageStatus_4');
            $table->boolean('VoltageStatus_5');
            $table->boolean('VoltageStatus_6');
            $table->boolean('VoltageStatus_7');
            $table->boolean('VoltageStatus_8');
            // StatusT
            $table->boolean('TemperatureStatus_1');
            $table->boolean('TemperatureStatus_2');
            $table->boolean('TemperatureStatus_3');
            $table->boolean('TemperatureStatus_4');
            $table->boolean('TemperatureStatus_5');
            $table->boolean('TemperatureStatus_6');
            $table->boolean('TemperatureStatus_7');
            $table->boolean('TemperatureStatus_8');
            // Vpackage
            $table->double('VoltagePackage_1');
            $table->double('VoltagePackage_2');
            $table->double('VoltagePackage_3');
            // Tpackage
            $table->double('TemperaturePackage_1');
            $table->double('TemperaturePackage_2');
            $table->double('TemperaturePackage_3');
            // Curentpackage
            $table->double('CurrentPackage_1');
            $table->double('CurrentPackage_2');
            $table->double('CurrentPackage_3');
            // ConnectPackage
            $table->string('ConnectPackage_1');
            $table->string('ConnectPackage_2');
            $table->string('ConnectPackage_3');
            // StatusPackage
            $table->boolean('StatusVoltagePackage_1');
            $table->boolean('StatusVoltagePackage_2');
            $table->boolean('StatusVoltagePackage_3');
            $table->boolean('StatusTemperaturePackage_1');
            $table->boolean('StatusTemperaturePackage_2');
            $table->boolean('StatusTemperaturePackage_3');
            // peripheral
            $table->boolean('Peripheral_1');
            $table->boolean('Peripheral_2');
            $table->boolean('Peripheral_3');
            $table->boolean('Peripheral_4');
            // Times
            $table->timestamps();
        });
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            // VCell
            $table->double('VoltageCell_1');
            $table->double('VoltageCell_2');
            $table->double('VoltageCell_3');
            $table->double('VoltageCell_4');
            $table->double('VoltageCell_5');
            $table->double('VoltageCell_6');
            $table->double('VoltageCell_7');
            $table->double('VoltageCell_8');
             //TCell
            $table->double('TemperatureCell_1');
            $table->double('TemperatureCell_2');
            $table->double('TemperatureCell_3');
            $table->double('TemperatureCell_4');
            $table->double('TemperatureCell_5');
            $table->double('TemperatureCell_6');
            $table->double('TemperatureCell_7');
            $table->double('TemperatureCell_8');
            // StatusV
            $table->boolean('VoltageStatus_1');
            $table->boolean('VoltageStatus_2');
            $table->boolean('VoltageStatus_3');
            $table->boolean('VoltageStatus_4');
            $table->boolean('VoltageStatus_5');
            $table->boolean('VoltageStatus_6');
            $table->boolean('VoltageStatus_7');
            $table->boolean('VoltageStatus_8');
            // StatusT
            $table->boolean('TemperatureStatus_1');
            $table->boolean('TemperatureStatus_2');
            $table->boolean('TemperatureStatus_3');
            $table->boolean('TemperatureStatus_4');
            $table->boolean('TemperatureStatus_5');
            $table->boolean('TemperatureStatus_6');
            $table->boolean('TemperatureStatus_7');
            $table->boolean('TemperatureStatus_8');
            // Vpackage
            $table->double('VoltagePackage_1');
            $table->double('VoltagePackage_2');
            $table->double('VoltagePackage_3');
            // Tpackage
            $table->double('TemperaturePackage_1');
            $table->double('TemperaturePackage_2');
            $table->double('TemperaturePackage_3');
            // Curentpackage
            $table->double('CurrentPackage_1');
            $table->double('CurrentPackage_2');
            $table->double('CurrentPackage_3');
            // ConnectPackage
            $table->string('ConnectPackage_1');
            $table->string('ConnectPackage_2');
            $table->string('ConnectPackage_3');
            // StatusPackage
            $table->boolean('StatusVoltagePackage_1');
            $table->boolean('StatusVoltagePackage_2');
            $table->boolean('StatusVoltagePackage_3');
            $table->boolean('StatusTemperaturePackage_1');
            $table->boolean('StatusTemperaturePackage_2');
            $table->boolean('StatusTemperaturePackage_3');
            // peripheral
            $table->boolean('Peripheral_1');
            $table->boolean('Peripheral_2');
            $table->boolean('Peripheral_3');
            $table->boolean('Peripheral_4');
            // Times
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
