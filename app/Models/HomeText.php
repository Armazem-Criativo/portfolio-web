<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeText extends Model
{
    protected $fillable = [
        'name',
        'acting',
        'aboutme',
        'git_btn_label',
        'git_btn_link',
        'linkedin_btn_label',
        'linkedin_btn_link',
        'curriculum_btn_label',
        'curriculum_btn_link',
        'tech_title',
        'project_title',
        'contact_title'
    ];
}
