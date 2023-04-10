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
        $requirements = [
            "ACLS License",
            "ATLS License",
            "BLS License",
            "CML License",
            "DEA License", 
            "FCCS License",
            "CV",
            "Driver' License",
            "Demographics",
            "ERAS Application",
            "Immunization Records",
            "NPI Number",
            "Medical School Diploma",
            "Medical Records",
            "Postgraduate Trainee License",
            "Social Security Card",
            "Sick Buy Back Form"
        ];

        foreach ($requirements as $requirement) {
            DB::table('requirements')->insert([
                'required_doc' => $requirement,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('requirements')->delete();
    }
};
