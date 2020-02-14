<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;

/**
 * Class Role
 * @package App\Models
 * @version February 6, 2020, 1:01 pm UTC
 *
 */
class Role extends Model

{
    protected $fillable = [
        'name',
        'slug',
    ];


    public static function rules($id = null)
    {
        return [
            'name' => 'required',
            'slug' => [
                'required',
                Rule::unique('roles', 'slug')->ignore($id, 'id')
            ],
        ];
    }



    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id' );
    }

}
