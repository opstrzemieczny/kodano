<?php

namespace Vendor\Module\Api;

use Vendor\Module\Model\Promotion;
use Vendor\Module\Model\PromotionGroup;

class PromotionApi implements PromotionApiInterface
{
    protected $promotionModel;
    protected $promotionGroupModel;

    public function __construct(
        Promotion $promotionModel,
        PromotionGroup $promotionGroupModel
    ) {
        $this->promotionModel = $promotionModel;
        $this->promotionGroupModel = $promotionGroupModel;
    }

    public function getList()
    {
        // Implementacja pobierania listy promocji
    }

    public function getPromotion($id)
    {
        // Implementacja pobierania pojedynczej promocji
    }

    public function addPromotion(array $data)
    {
        try {
            $promotion = $this->promotionModel;
            $promotion->setData($data);
            $promotion->save();
            return ['success' => true, 'message' => 'Promotion added successfully.'];
        } catch (\Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }

    public function deletePromotion($id)
    {
        try {
            $promotion = $this->promotionModel->load($id);
            if ($promotion->getId()) {
                $promotion->delete();
                return ['success' => true, 'message' => 'Promotion deleted successfully.'];
            } else {
                return ['success' => false, 'message' => 'Promotion not found.'];
            }
        } catch (\Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
}
