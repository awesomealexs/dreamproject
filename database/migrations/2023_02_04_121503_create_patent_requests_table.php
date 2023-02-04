<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patent_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->cascadeOnUpdate();
            $table->string('client_name')->nullable();
            $table->integer('INN');
            $table->string('legal_address')->nullable();
            $table->string('ceo_name')->nullable();
            $table->date('date_of_application')->nullable();
            $table->string('application_number')->nullable();
            $table->text('descriptiveness_text')->nullable();
            $table->text('falsity_text')->nullable();
            $table->smallInteger('perspective_forecast')->nullable()->unsigned();
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
        Schema::dropIfExists('patent_requests');
    }
}
