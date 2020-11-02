<?php

/**
 * A small module to filter regions from forms.
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright 2020 August Ash, Inc. (https://www.augustash.com)
 */

namespace Augustash\RegionFilter\Plugin;

use Magento\Directory\Model\ResourceModel\Region\Collection as SubjectClass;

/**
 * Prevent disallowed regions from displaying in dropdowns.
 */
class RemoveFromOptionsPlugin extends AbstractPlugin
{
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
            $options,
            function ($option) {
                if (isset($option['label'])) {
                    return !in_array($option['label'], $this->disallowed);
                }
                return true;
            }
        );

        return $results;
    }
}
