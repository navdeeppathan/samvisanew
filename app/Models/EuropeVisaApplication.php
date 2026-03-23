<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EuropeVisaApplication extends Model
{
    protected $fillable = [
        'country',
        'surname',
        'first_name',
        'middle_name',
        'dob',
        'nationality',
        'country_of_birth',
        'passport_number',
        'marital_status',
        'passport_issue',
        'passport_expiry',
        'mobile_phone',
        'email',

        'home_door',
        'home_street',
        'home_city',
        'home_postcode',
        'home_country',

        'company_name',
        'occupation',
        'work_door',
        'work_street',
        'work_city',
        'work_postcode',
        'work_country',
        'work_phone',
        'work_email',

        'departure_date',
        'return_date',
        'destination_city',
        'visit_purpose',

        'been_to_eu',
        'prev_eu_visa',

        'uk_sharecode',

        'eu_relation',
        'eu_relation_type',
        'eu_citizen_nationality',
        'eu_relation_passport',

        'is_sponsored',
        'sponsor_name',
        'sponsor_relationship',
        'sponsor_phone',
        'sponsor_address',

        'passport_scan',
        'bank_statements',
        'payslips',

        'message',
        'correction_fields',
        'correction_message',
    ];

    protected $casts = [
        'correction_fields' => 'array',
    ];
}
