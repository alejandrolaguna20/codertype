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
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable();
            $table->text('bio')->nullable();
            $table->string('location')->nullable();
            $table->integer('avg_wpm')->nullable();
            $table->decimal('avg_accuracy', 5, 2)->nullable();
            $table->integer('best_wpm')->nullable();
            $table->decimal('best_accuracy', 5, 2)->nullable();
            $table->integer('total_tests')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
            $table->dropColumn('bio');
            $table->dropColumn('location');
            $table->dropColumn('avg_wpm');
            $table->dropColumn('avg_accuracy');
            $table->dropColumn('best_wpm');
            $table->dropColumn('best_accuracy');
            $table->dropColumn('total_tests');
        });
    }
};
