<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Class Season
 * @package App\Models
 * @version January 29, 2020, 1:52 pm UTC
 *
 * @property string title
 * @property string description
 * @property integer start
 * @property integer finish
 * @property integer serial_id
 */
class Season extends Model
{


    public $table = 'seasons';

    public $fillable = [
        'title',
        'description',
        'start',
        'finish',
        'serial_id',
        'path',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'serial_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'start' => 'integer',
        'finish' => 'integer',
        'path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'start' => 'required',
        'finish' => 'required',
        'serial_id' => 'required',

    ];

    public function serial()
    {
        return $this->belongsTo(Serial::class);
    }

    public function uploadImage(UploadedFile $image)
    {
        Storage::disk('uploads')->delete($this->path);
        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('', $filename, ['disk' => 'uploads']);
        $this->path = $filename;
        $this->save();
    }

    public function scopeFilterBySeason($query, $serial_id)
    {
        return $query->where('serial_id', $serial_id);
    }
}

