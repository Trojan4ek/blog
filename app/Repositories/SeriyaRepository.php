<?php

namespace App\Repositories;

use App\Models\Seriya;
use App\Repositories\BaseRepository;

/**
 * Class SeriyaRepository
 * @package App\Repositories
 * @version January 31, 2020, 12:17 pm UTC
*/

class SeriyaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'serial_id',
        'season_id',
        'title',
        'description'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Seriya::class;
    }
}
