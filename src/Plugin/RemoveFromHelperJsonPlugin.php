<?php

/**
 * A small module to filter regions from forms.
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright 2020 August Ash, Inc. (https://www.augustash.com)
 */

namespace Augustash\RegionFilter\Plugin;

use Magento\Directory\Helper\Data as SubjectClass;

/**
 * Prevent disallowed regions from displaying in dropdowns.
 */
class RemoveFromHelperJsonPlugin extends AbstractPlugin
{
    /**
     * Remove regions.
     *
     * @param \Magento\Directory\Helper\Data $subject
     * @param array $regions
     * @return array
     */
    public function afterGetRegionData(SubjectClass $subject, array $regions): array
    {
        $results = array_filter(
            $regions['US'],
            function ($option) {
                if (isset($option['name'])) {
                    return !in_array($option['name'], $this->disallowed);
                }
                return true;
            }
        );

        $regions['US'] = $results;

        return $regions;
    }
}
