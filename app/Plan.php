<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'project_name',
        'customer_infos',
        'customer_adress',
        'customer_email',
        'customer_phonenumber',
        'pitch',
        'cdc_fonctionnel',
        'goals',
        'team_project',
        'team_client',
        'process',
        'organisation',
        'information',
        'cr_client',
        'cr_interne',
        'base_mail',
        'thrends_msg',
        'risk',
        'user_id',
        'signature'

    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
