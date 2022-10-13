<?php namespace LZaplata\Gallery\Models;

use Model;
use RainLab\Translate\Behaviors\TranslatableModel;

/**
 * Model
 */
class Gallery extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'lzaplata_gallery_galleries';

    /**
     * @var array Validation rules
     */
    public $rules = [
        "name" => "required",
        "slug" => ["required", "regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i", "unique:lzaplata_gallery_galleries,slug,NULL,id,deleted_at,NULL"]
    ];

    /**
     * @var array
     */
    public $attachMany = [
        "images" => "System\Models\File"
    ];

    /**
     * @var array
     */
    public $implement = [
        "@" . TranslatableModel::class,
    ];

    /**
     * @var array Translatable model attributes
     */
    public $translatable = [
        "name",
        "slug",
        "description"
    ];
}
