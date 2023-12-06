<?php

namespace Vendor\Module\Model;

use Magento\Framework\Model\AbstractModel;
use Vendor\Module\Model\ResourceModel\PromotionGroup as PromotionGroupResource;

class PromotionGroup extends AbstractModel
{
    protected $_idFieldName = 'group_id';
    protected $_cacheTag = 'promotion_groups';
    protected $_eventPrefix = 'promotion_groups';

    protected $promotionGroupResource;

    public function __construct(
        PromotionGroupResource $promotionGroupResource,
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        parent::__construct($context, $registry, null, null, $data);
        $this->promotionGroupResource = $promotionGroupResource;
    }

    protected function _construct()
    {
        $this->_init(PromotionGroupResource::class);
    }

    public function getName()
    {
        return $this->_getData('name');
    }

    public function setName($name)
    {
        return $this->setData('name', $name);
    }

    public function getCreatedAt()
    {
        return $this->_getData('created_at');
    }

    public function setCreatedAt($createdAt)
    {
        return $this->setData('created_at', $createdAt);
    }

    public function getUpdatedAt()
    {
        return $this->_getData('updated_at');
    }

    public function setUpdatedAt($updatedAt)
    {
        return $this->setData('updated_at', $updatedAt);
    }
    
    // Dodaj inne metody i funkcje związane z modelem, jeśli są potrzebne
}
