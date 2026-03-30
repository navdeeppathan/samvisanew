<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MoroccoVisa extends Model
{

protected $table = 'morocco_visas';

protected $fillable = [

'surname',
'first_name',
'middle_name',
'dob',
'nationality',
'country_of_birth',
'marital_status',
'occupation',
'mobile_phone',
'email',

'passport_number',
'passport_issue',
'passport_expiry',

'home_door',
'home_street',
'home_city',
'home_postcode',
'home_country',

'father_full_name',
'mother_full_name',

'departure_date',
'return_date',
'destination_city',
'visit_purpose',
'accommodation',
'accommodation_phone',


'passport_scan',
'passport_photo',
'uk_visa_copy',
'bank_statements',
'payslips',

'uk_sharecode',

'message',
  'correction_fields',
    'correction_message',
];

protected $casts = [
    'correction_fields' => 'array',
];

}