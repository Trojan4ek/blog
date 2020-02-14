<?php

namespace App\Repositories;

use App\Models\Serial;
use App\Repositories\BaseRepository;

/**
 * Class SerialRepository
 * @package App\Repositories
 * @version January 28, 2020, 12:40 pm UTC
*/

class SerialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'path',
        'start',
        'finish'
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
        return Serial::class;
    }
}
