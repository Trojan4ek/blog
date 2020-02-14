<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Class Serial
 * @package App\Models
 * @version January 28, 2020, 12:40 pm UTC
 *
 * @property string title
 * @property string description
 * @property string path
 * @property integer start
 * @property integer finish
 */
class Serial extends Model
{

    public $table = 'serials';


    public $fillable = [
        'title',
        'description',
        'path',
        'start',
        'finish'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'path' => 'string',
        'start' => 'integer',
        'finish' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'path' => 'required',
        'start' => 'required',
        'finish' => 'required'
    ];


    /**
     * @param UploadedFile $image
     */

    public function uploadImage(UploadedFile $image)
    {
        Storage::disk('uploads')->delete($this->path);
        $filename = Str::random(10) . '.' . $image->extension();
        $image->storeAs('', $filename, ['disk' => 'uploads']);
        $this->path = $filename;
        $this->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
