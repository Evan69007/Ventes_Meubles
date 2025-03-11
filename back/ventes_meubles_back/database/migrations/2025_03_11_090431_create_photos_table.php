<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('photos', function (Blueprint $table) {
			$table->id()->primary();
			$table->foreignId('meubles_id')->constrained(
				table: 'meubles', indexName: 'id'
			);
			$table->enum('type', ['principale', 'secondaire']);
			$table->string('url', length: 50);
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
