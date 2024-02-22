<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_entries', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('admit_emergency')->nullable();
            $table->integer('ward_no')->nullable();
            $table->integer('ward_occuiped')->nullable();
            $table->integer('cabin_no')->nullable();
            $table->integer('total_bed')->nullable();
            $table->integer('total_bed_occuiped')->nullable();
            $table->integer('admited_patient_no')->nullable();
            $table->integer('released_patient_no')->nullable();
            $table->integer('emergency_patient')->nullable();
            $table->integer('consultant_no')->nullable();
            $table->integer('opd_no')->nullable();
            $table->integer('physiotherapy_patient')->nullable();
            $table->integer('dental_patient')->nullable();
            $table->integer('ctscan_no')->nullable();
            $table->integer('mri_no')->nullable();
            $table->integer('imaging_no')->nullable();
            $table->integer('lab_investigation_no')->nullable();
            $table->integer('ot_no')->nullable();
            $table->integer('canteen_sales')->nullable();
            $table->integer('drug_outdoor_sales')->nullable();
            $table->integer('drug_indoor_sales')->nullable();
            $table->integer('total_drug_sales')->nullable();
            $table->integer('collection_imaging')->nullable();
            $table->integer('collection_lab')->nullable();
            $table->integer('collection_hospital')->nullable();
            $table->integer('estimated_income')->nullable();
            $table->integer('estimated_expense')->nullable();
            $table->integer('estimated_netincome')->nullable();
            $table->date('entry_date');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('hospital_entries');
    }
}
