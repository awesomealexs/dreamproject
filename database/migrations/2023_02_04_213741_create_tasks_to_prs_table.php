<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksToPrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_to_prs', function (Blueprint $table) {
            $table->foreignId('patent_requests_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('task_id')->constrained()->cascadeOnUpdate();
            $table->date('hard_deadline');
            $table->date('soft_deadline');
            $table->smallInteger('success')->unsigned()->default(0);
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
        Schema::dropIfExists('tasks_to_prs');
    }
}
