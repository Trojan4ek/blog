<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Seriya
 * @package App\Models
 * @version January 31, 2020, 12:17 pm UTC
 *
 * @property \App\Models\Season season
 * @property \App\Models\Serial serial
 * @property integer serial_id
 * @property integer season_id
 * @property string title
 * @property string description
 */
class Seriya extends Model
{

    public $table = 'seriyas';

    public $fillable = [
        'season_id',
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'season_id' => 'integer',
        'title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'season_id' => 'required',
        'title' => 'required',
        'description' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function scopeFilterBySeriya($query, $season_id)
    {
        return $query->where('season_id', $season_id);
    }
}
