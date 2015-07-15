<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchField extends Model {

    protected $fillable = [
        'display_name',
        'text_id',
        'field_type',
        'filters',
        'selection_values',
        'category'
    ];

}
