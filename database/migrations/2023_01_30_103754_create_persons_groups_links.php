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
        Schema::create('persons_groups_links', function (Blueprint $table) {
            $table -> id();
            $table -> foreignId('person_id')
                -> references('id')
                -> on('persons');
            $table -> foreignId('group_id')
                -> references('id')
                -> on('groups');
            $table -> foreignId('enrollment_order_id')
                -> nullable()
                -> references('id')
                -> on('administrative_documents');
            $table -> jsonb('academic_leave')
                -> nullable();
            $table -> boolean('budget')
                -> default(true);
            $table -> text('additionals')
                -> nullable();
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups_persons');
    }
};