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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('_token');
            $table->string('email_address');
            $table->string('name');
            $table->string('jiit_employee_code');
            $table->date('date_birth');
            $table->string('category')->nullable();
            $table->string('nature_of_employment')->nullable();
            $table->string('department')->nullable();
            $table->date('date_joining_jiit_noida')->nullable();
            $table->string('designation_on_joining_jiit_noida')->nullable();
            $table->date('date_of_last_promotion')->nullable();
            $table->string('designation_on_promotion')->nullable();
            $table->string('graduation')->nullable();
            $table->integer('year_of_completing_graduation')->nullable();
            $table->string('institute_name_and_place_graduation')->nullable();
            $table->string('post_graduation')->nullable();
            $table->integer('year_of_completing_masters_program')->nullable();
            $table->string('institute_name_and_place_post_graduation')->nullable();

            $table->boolean('completed_phd')->default(false);
            $table->integer('year_of_completion_phd')->nullable();
            $table->integer('year_of_award_doctoral_degree')->nullable();
            $table->string('institute_name_and_place_phd')->nullable();
            $table->integer('total_experience_months_before_joining_jiit_noida')->nullable();
            $table->integer('total_academic_institute_experience_months')->nullable();
            $table->string('last_academic_institute_served')->nullable();
            $table->integer('service_duration_last_served_academic_institute_months')->nullable();
            $table->integer('total_experience_research_institutes_months')->nullable();
            $table->string('last_research_institute_served')->nullable();
            $table->integer('service_duration_last_served_research_institute_months')->nullable();
            $table->integer('total_experience_industries_months')->nullable();
            $table->string('last_organization')->nullable();
            $table->integer('service_duration_last_organization_months')->nullable();
            $table->integer('total_experience_other_organizations_months')->nullable();

            // Awards
            $table->integer('total_national_awards')->nullable();
            $table->integer('total_international_awards')->nullable();
            $table->string('award_name_1')->nullable();
            $table->string('awarded_by_1')->nullable();
            $table->date('date_of_receiving_award_1')->nullable();
            $table->string('national_or_international_award_1')->nullable();
            $table->string('award_document_1')->nullable(); // File path
            $table->string('award_name_2')->nullable();
            $table->string('awarded_by_2')->nullable();
            $table->date('date_of_receiving_award_2')->nullable();
            $table->string('national_or_international_award_2')->nullable();
            $table->string('award_document_2')->nullable(); // File path
            $table->string('award_name_3')->nullable();
            $table->string('awarded_by_3')->nullable();
            $table->date('date_of_receiving_award_3')->nullable();
            $table->string('national_or_international_award_3')->nullable();
            $table->string('award_document_3')->nullable(); // File path
            $table->string('award_name_4')->nullable();
            $table->string('awarded_by_4')->nullable();
            $table->date('date_of_receiving_award_4')->nullable();
            $table->string('national_or_international_award_4')->nullable();
            $table->string('award_document_4')->nullable(); // File path

            // Research Publication
            $table->string('corresponding_author')->nullable();
            $table->string('author_1_from_jiit')->nullable();
            $table->string('author_2_from_jiit')->nullable();
            $table->string('publication_code')->nullable();
            $table->string('publication_document')->nullable(); // File path
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
