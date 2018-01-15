<?php
/**
 * A Magento 2 module named Self/Storelocator
 * Copyright (C) 2017  
 * 
 * This file included in Self/Storelocator is licensed under OSL 3.0
 * 
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Self\Storelocator\Model;

class GetHospitalManagement
{

    /**
     * {@inheritdoc}
     */
    public function getGetHospital($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}
