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
        //
        Schema::create('position', function (Blueprint $table) {
            $table->id('role_id'); // ไอดีที่เพิ่มขึ้นอัตโนมัติ
            $table->string('positionname');
            $table->integer('level');
            $table->timestamps(); // สร้างเวลาที่สร้างและอัปเดต
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('position');
    }
};
