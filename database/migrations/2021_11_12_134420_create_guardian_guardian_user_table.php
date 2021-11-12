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
        Schema::create('guardian_guardian_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guardian_id')->constrained();
            $table->foreignId('guardian_user_id')->constrained();
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
        Schema::table('child_guardian', function (Blueprint $table) {
            $table->dropForeign(['guardian_id']);
            $table->dropForeign(['guardian_user_id']);
        });

        Schema::dropIfExists('guardian_guardian_user');
    }
};
