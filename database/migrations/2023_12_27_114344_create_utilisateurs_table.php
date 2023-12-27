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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_tel')->nullable()->unique(); // Utilisez 'string' au lieu de 'number' pour le numéro de téléphone
            $table->string('mots_passe'); // Correction de la faute de frappe : 'mots_passe' au lieu de 'mots_passe'
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('num_retrait')->nullable();
            $table->boolean('moyen_retrait')->nullable(); // 'boolean' au lieu de 'Boolean'
            $table->integer('code_parainage'); // 'integer' au lieu de 'Integer'
            $table->integer('code_user')->nullable(); // 'integer' au lieu de 'Integer'
            $table->integer('solde_user')->default(0); // 'integer' au lieu de 'Int' et valeur par défaut du solde
            $table->boolean('type_use')->default(1); // 'boolean' au lieu de 'Bolean' et valeur par défaut pour le type_user
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
