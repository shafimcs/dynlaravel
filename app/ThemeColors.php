<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ThemeColors extends Model
{
   
    protected $fillable = [
        'header_color','footer_color','body_color','sticky_header','header_text_color',
    ];
    protected $table='theme_colors';

   
}
