<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksPatentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_patent_requests', function (Blueprint $table) {
            $table->foreignId('patent_request_id')->constrained()->cascadeOnUpdate();
            $table->foreignId('task_id')->constrained()->cascadeOnUpdate();
            $table->date('hard_deadline')->nullable();
            $table->date('soft_deadline')->nullable();
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
        Schema::dropIfExists('task_patent_requests');
    }
}
