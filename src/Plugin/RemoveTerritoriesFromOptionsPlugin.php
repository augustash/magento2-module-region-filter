<?php

/**
 * A small module to filter territories from region dropdowns.
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright 2020 August Ash, Inc. (https://www.augustash.com)
 */

namespace Augustash\RegionFilter\Plugin;

use Magento\Directory\Model\ResourceModel\Region\Collection as SubjectClass;

/**
 * Prevent territories from displaying in region dropdowns.
 */
class RemoveTerritoriesFromOptionsPlugin
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

    /**
     * Remove options.
     *
     * @param \Magento\Directory\Model\ResourceModel\Region\Collection $subject
     * @param array $options
     * @return array
     */
    public function afterToOptionArray(SubjectClass $subject, array $options): array
    {
        $results = array_filter(
            $options, function ($option) {
                if (isset($option['label'])) {
                    return !in_array($option['label'], $this->disallowed);
                }
                return true;
            }
        );

        return $results;
    }
}
