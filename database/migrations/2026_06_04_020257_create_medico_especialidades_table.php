<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("medico_especialidades", function (Blueprint $table) {
            $table->id();
            // Foreign keys pointing to your parent tables
            $table
                ->foreignId("medico_id")
                ->constrained("medicos")
                ->onDelete("cascade");
            $table
                ->foreignId("especialidade_id")
                ->constrained("especialidades")
                ->onDelete("cascade");

            $table->timestamps();

            // Optional: Prevents duplicate pairs
            $table->unique(["medico_id", "especialidade_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("medico_especialidades");
    }
};
