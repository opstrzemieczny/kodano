<?php

namespace Vendor\Module\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PromotionGroup extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('promotion_groups', 'group_id');
    }
}
