<?php namespace Pensoft\CitationTool\Models;

use Model;

/**
 * Model
 */
class Citation extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_citationtool_citations';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'authors' => 'required',
        'title' => 'required',
        'year' => 'required',
    ];

    public $attachOne = [
        'file_upload' => 'System\Models\File',
        'file_preview' => 'System\Models\File',
    ];
}
