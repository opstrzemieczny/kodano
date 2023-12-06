<?php

namespace Vendor\Module\Api;

interface PromotionApiInterface
{
    /**
     * @return mixed
     */
    public function getList();

    /**
     * @param int $id
     * @return mixed
     */
    public function getPromotion($id);

    /**
     * @param array $data
     * @return mixed
     */
    public function addPromotion(array $data);

    /**
     * @param int $id
     * @return mixed
     */
    public function deletePromotion($id);
}
