<?php

/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009-2016 terminal42 gmbh & Isotope eCommerce Workgroup
 *
 * @link       https://isotopeecommerce.org
 * @license    https://opensource.org/licenses/lgpl-3.0.html
 */

namespace Isotope\Interfaces;

interface IsotopeAttributeForVariants
{

    /**
     * Return true if attribute is a variant option
     * @return    bool
     */
    public function isVariantOption();

    /**
     * Get available variant options for a product
     * @param   array
     * @param   array
     * @return  array
     */
    public function getOptionsForVariants(array $arrIds, array $arrOptions = array());
}
