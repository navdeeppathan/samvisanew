<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IrelandVisa extends Model
{
    protected $table = 'ireland_visas';

    protected $fillable = [

        'surname',
        'first_name',
        'middle_name',
        'dob',
        'nationality',
        'country_of_birth',
        'mobile_phone',
        'email',

        'passport_number',
        'passport_issue',
        'passport_expiry',
        'passport_scan',

        'prev_passport_number',
        'prev_passport_issue',
        'prev_passport_expiry',
        'prev_passport_1',
        'prev_passport_2',

        'home_door',
        'home_street',
        'home_city',
        'home_postcode',
        'home_country',
        'uk_residency_since',

        'company_name',
        'occupation',
        'job_title',

        'work_door',
        'work_street',
        'work_city',
        'work_postcode',
        'work_country',

        'employment_start',
        'employment_end',

        'departure_date',
        'return_date',
        'destination_city',
        'visit_purpose',
        'accommodation',
        'accommodation_phone',
        

        'applied_before',
        'prev_application_date',
        'prev_application_country',

        'refused_before',
        'refused_date',
        'refused_country',
        'refused_reason',

        'is_married',
        'spouse_name',
        'spouse_dob',
        'spouse_passport',

        'has_children',
        'num_children',
        'children_passports',

        'bank_statements',
        'payslips',

        'uk_sharecode',
        'message',
        'correction_fields',
        'correction_message',
        'payment_status',
    ];

    protected $casts = [
        'correction_fields' => 'array',
    ];
}