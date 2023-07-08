<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('tikets', function (Blueprint $table) {
        $table->id();
        $table->string('nik')->unique();
        $table->string('nama');
        $table->string('jenis_kel');
        $table->date('tgl_lahir');
        $table->text('alamat');
        $table->string('no_telp');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
