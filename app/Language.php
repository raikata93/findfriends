<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'lang_table';
 	protected $fillable = ['language_id', 'language', 'language_name', 'country_name'];
}
