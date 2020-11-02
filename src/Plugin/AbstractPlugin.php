<?php

/**
 * A small module to filter regions from forms.
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright 2020 August Ash, Inc. (https://www.augustash.com)
 */

namespace Augustash\RegionFilter\Plugin;

/**
 * Prevent disallowed regions from displaying in dropdowns.
 */
abstract class AbstractPlugin
{
    /**
     * @var array
     */
    protected $disallowed = [
        'American Samoa',
        'Armed Forces Africa',
        'Armed Forces Americas',
        'Armed Forces Canada',
        'Armed Forces Europe',
        'Armed Forces Middle East',
        'Armed Forces Pacific',
        'Federated States Of Micronesia',
        'Guam',
        'Marshall Islands',
        'Northern Mariana Islands',
        'Palau',
        'Puerto Rico',
        'Virgin Islands',
    ];
}
