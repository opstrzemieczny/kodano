<?php

namespace Vendor\Module\Model;

use Magento\Framework\Model\AbstractModel;

class Promotion extends AbstractModel
{
    protected $_idFieldName = 'promotion_id';
    protected $_cacheTag = 'promotions';
    protected $_eventPrefix = 'promotions';

    protected function _construct()
    {
        $this->_init(ResourceModel\Promotion::class);
    }
}

