<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChinaVisaApplication extends Model
{
    use HasFactory;

    protected $table = 'china_visa_applications';

    protected $fillable = [

        'country',

        // PERSONAL INFO
        'surname',
        'first_name',
        'middle_name',
        'city_of_birth',
        'state_of_birth',
        'country_of_birth',
        'marital_status',

        'other_nationality',
        'other_nationality_name',
        'other_passport_number',
        'other_nationality_date',

        // DOCUMENTS
        'passport_scan',
        'empty_pages',
        'selfie_photo',
        'bank_statements',
        'payslips',
        'dbs_check',

        // TRAVEL
        'departure_date',
        'return_date',
        'destination_city',
        'occupation',

        // HOME
        'mobile_phone',
        'email',

        'home_door',
        'home_street',
        'home_city',
        'home_postcode',
        'home_country',

        // EMPLOYMENT
        'company_name',
        'job_title',

        'work_door',
        'work_street',
        'work_city',
        'work_postcode',
        'work_country',

        'work_phone',
        'annual_income',
        'job_duties',
        'job_start_date',

        'supervisor_name',
        'supervisor_phone',

        'work_history',

        // EDUCATION
        'school_name',
        'degree',
        'subjects',

        // FAMILY
        'father_name',
        'father_dob',
        'father_nationality',
        'father_occupation',
        'father_in_china',

        'mother_name',
        'mother_dob',
        'mother_nationality',
        'mother_occupation',
        'mother_in_china',

        'spouse_name',
        'spouse_dob',
        'spouse_nationality',
        'spouse_occupation',

        // EMERGENCY
        'emergency_name',
        'emergency_relationship',
        'emergency_phone',
        'emergency_email',

        'emergency_door',
        'emergency_street',
        'emergency_city',
        'emergency_postcode',
        'emergency_country',

        // TRAVEL HISTORY
        'been_to_china',
        'prev_china_visa',
        'prev_fingerprint_date',
        'prev_visa_country',
        'prev_visa',

        'residence_permit',
        'permit_number',

        'other_visas',
        'other_visa_countries',

        'visited_past_year',
        'visited_countries',

        // DECLARATIONS
        'china_refused',
        'china_refused_details',

        'criminal_record',
        'criminal_details',

        'medical_condition',
        'medical_details',

        'epidemic_visit',
        'epidemic_details',

        'military_service',
        'military_country',
        'military_branch',
        'military_rank',
        'military_start',
        'military_end',

        'other_declaration',
        'other_declaration_details',

        'correction_fields',
        'correction_message',
    ];


    protected $casts = [
        'other_nationality_date' => 'date',
        'departure_date' => 'date',
        'return_date' => 'date',
        'job_start_date' => 'date',
        'father_dob' => 'date',
        'mother_dob' => 'date',
        'spouse_dob' => 'date',
        'prev_fingerprint_date' => 'date',
        'military_start' => 'date',
        'military_end' => 'date',
        'correction_fields' => 'array',
    ];

    
}