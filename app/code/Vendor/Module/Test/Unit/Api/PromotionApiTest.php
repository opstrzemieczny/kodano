<?php

namespace Vendor\Module\Test\Unit\Api;

use PHPUnit\Framework\TestCase;
use Vendor\Module\Api\PromotionApi;
use Vendor\Module\Model\Promotion;

class PromotionApiTest extends TestCase
{
    protected $objectManager;
    protected $promotionModelMock;

    protected function setUp(): void
    {
        $this->objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);

        $this->promotionModelMock = $this->getMockBuilder(Promotion::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testAddPromotion()
    {
        $data = [
            'name' => 'Test Promotion',
            // Add other required fields
        ];

        $promotionApi = $this->objectManager->getObject(
            PromotionApi::class,
            ['promotionModel' => $this->promotionModelMock]
        );

        $this->promotionModelMock->expects($this->once())
            ->method('setData')
            ->with($this->equalTo($data));

        $this->promotionModelMock->expects($this->once())
            ->method('save');

        $result = $promotionApi->addPromotion($data);
        $this->assertTrue($result['success']);
        $this->assertEquals('Promotion added successfully.', $result['message']);
    }

    // Add similar tests for other methods
}
