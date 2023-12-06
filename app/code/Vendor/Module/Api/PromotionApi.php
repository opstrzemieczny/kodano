<?php

namespace Vendor\Module\Api;

use Vendor\Module\Model\Promotion;

class PromotionApi implements PromotionApiInterface
{
    protected $promotionModel;

    public function __construct(
        Promotion $promotionModel
    ) {
        $this->promotionModel = $promotionModel;
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
        // Implementacja dodawania promocji
    }

    public function deletePromotion($id)
    {
        // Implementacja usuwania promocji
    }
}
