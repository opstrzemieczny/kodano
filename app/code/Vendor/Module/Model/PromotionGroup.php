<?php

namespace Vendor\Module\Model;

use Magento\Framework\Model\AbstractModel;

class PromotionGroup extends AbstractModel
{
    protected $_idFieldName = 'group_id';
    protected $_cacheTag = 'promotion_groups';
    protected $_eventPrefix = 'promotion_groups';

    protected function _construct()
    {
        $this->_init(ResourceModel\PromotionGroup::class);
    }
}
