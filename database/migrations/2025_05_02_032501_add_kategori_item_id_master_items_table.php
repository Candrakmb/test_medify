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
        schema::table('master_items', function (Blueprint $table) {
            $table->foreignId('kategori_item_id')->after('jenis')->nullable()->constrained('kategori_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('master_items', function (Blueprint $table) {
            $table->dropForeign(['kategori_item_id']);
            $table->dropColumn('kategori_item_id');
        });
    }
};
