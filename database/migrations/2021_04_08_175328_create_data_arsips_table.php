<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataArsipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_arsip', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nama',100);
            $table->integer('nip');
            $table->integer('nik');
            $table->char('tempat_lahir',30);
            $table->char('alamat',50);
            $table->char('jenis_kelamin',30);
            $table->date('tanggal_lahir');
            $table->char('jabatan',30);
            $table->char('ibu_kandung',30);
            $table->char('unit_penempatan',30);
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
        Schema::dropIfExists('data_arsip');
    }
}
