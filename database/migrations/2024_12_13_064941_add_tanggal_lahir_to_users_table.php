<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->date('tanggal_lahir')->nullable();  // Menambahkan kolom tanggal_lahir
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('tanggal_lahir');  // Menghapus kolom tanggal_lahir jika rollback
    });
}
};
