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
        Schema::create('meubles', function (Blueprint $table) {
            $table->id()->primary();
			$table->string('nom', length: 50);
			$table->string('type', length: 50);
			$table->text('couleurs');
			$table->text('matieres');
			$table->integer('hauteur');
			$table->integer('largeur');
			$table->integer('profondeur');
			$table->integer('quantite');
			$table->decimal('prix_ttc');
			$table->enum('statut', ['dispo', 'réservé', 'vendu']);
			$table->text('description');
			$table->enum('etat', ['parfait', 'bon', 'mauvais']);
			$table->date('date_mise_en_ligne');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meubles');
    }
};
