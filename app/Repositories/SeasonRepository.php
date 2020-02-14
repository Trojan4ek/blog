<?php

namespace App\Repositories;

use App\Models\Season;
use App\Repositories\BaseRepository;

/**
 * Class SeasonRepository
 * @package App\Repositories
 * @version January 31, 2020, 7:26 am UTC
*/

class SeasonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'start',
        'finish',
        'serial_id',
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
        return Season::class;
    }
}
