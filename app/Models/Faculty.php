<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        '_token',
        'email_address',
        'name',
        'jiit_employee_code',
        'date_birth',
        'category',
        'nature_of_employment',
        'department',
        'date_joining_jiit_noida',
        'designation_on_joining_jiit_noida',
        'date_of_last_promotion',
        'designation_on_promotion',
        'graduation',
        'year_of_completing_graduation',
        'institute_name_and_place_graduation',
        'post_graduation',
        'year_of_completing_masters_program',
        'institute_name_and_place_post_graduation',
        'completed_phd',
        'year_of_completion_phd',
        'year_of_award_doctoral_degree',
        'institute_name_and_place_phd',
        'total_experience_months_before_joining_jiit_noida',
        'total_academic_institute_experience_months',
        'last_academic_institute_served',
        'service_duration_last_served_academic_institute_months',
        'total_experience_research_institutes_months',
        'last_research_institute_served',
        'service_duration_last_served_research_institute_months',
        'total_experience_industries_months',
        'last_organization',
        'service_duration_last_organization_months',
        'total_experience_other_organizations_months',
        'total_national_awards',
        'total_international_awards',
        'award_name_1',
        'awarded_by_1',
        'date_of_receiving_award_1',
        'national_or_international_award_1',
        'award_document_1',
        'award_name_2',
        'awarded_by_2',
        'date_of_receiving_award_2',
        'national_or_international_award_2',
        'award_document_2',
        'award_name_3',
        'awarded_by_3',
        'date_of_receiving_award_3',
        'national_or_international_award_3',
        'award_document_3',
        'award_name_4',
        'awarded_by_4',
        'date_of_receiving_award_4',
        'national_or_international_award_4',
        'award_document_4',
        'corresponding_author',
        'author_1_from_jiit',
        'author_2_from_jiit',
        'publication_code',
        'publication_document'
    ];
}
