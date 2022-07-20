<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nick_name')->nullable()->unique();
            $table->string('last_name')->nullable();
            $table->foreignId('role_id')->nullable()->constrained('roles');

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
            $table->dropColumn('nick_name');
            $table->dropColumn('last_name');
            $table->dropConstrainedForeignId('roles_id');
        });
    }
}
