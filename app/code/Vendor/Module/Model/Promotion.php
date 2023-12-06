// app/code/Vendor/Module/Model/Promotion.php

<?php

namespace Vendor\Module\Model;

use Magento\Framework\Model\AbstractModel;
use Vendor\Module\Model\ResourceModel\Promotion as PromotionResource;

class Promotion extends AbstractModel
{
    protected $_idFieldName = 'promotion_id';
    protected $_cacheTag = 'promotions';
    protected $_eventPrefix = 'promotions';

    protected $promotionResource;

    public function __construct(
        PromotionResource $promotionResource,
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        parent::__construct($context, $registry, null, null, $data);
        $this->promotionResource = $promotionResource;
    }

    protected function _construct()
    {
        $this->_init(PromotionResource::class);
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
