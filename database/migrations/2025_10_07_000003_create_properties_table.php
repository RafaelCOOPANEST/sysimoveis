<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portal_id')->nullable()->constrained('portals')->nullOnDelete();
            $table->foreignId('agent_id')->nullable()->constrained('agents')->nullOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->bigInteger('price')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('type')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('area')->nullable();
            $table->json('images')->nullable();
            $table->string('url_original')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
