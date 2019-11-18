<?php

namespace CoruscateSolutions\SerialNumberGeneratorLaravel\Models;

use Jenssegers\Mongodb\Eloquent\Model;

/**
 * Class SettingNoGenerator.
 *
 * @package namespace App\Models;
 */
class SerialNoGenerator extends Model
{
    protected $collection = 'serial_no_generators';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'financial_year',
        'prefix',
        'postfix',
        'start_from',
        'date_from',
        'date_to',
        'total_no',
        'is_active'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date_from', 'date_to', 'created_at', 'updated_at'];
}
