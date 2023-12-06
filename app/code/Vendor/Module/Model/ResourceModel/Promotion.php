<?php

namespace Vendor\Module\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Promotion extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('promotions', 'promotion_id');
    }
}
