<?php
declare(strict_types=1);

namespace Blackbird\MoneticoHyvaCompatibility\Model\Magewire\Payment;

use Blackbird\Monetico\Helper\DataSealedForm;
use Hyva\Checkout\Model\Magewire\Payment\AbstractOrderData;
use Hyva\Checkout\Model\Magewire\Payment\AbstractPlaceOrderService;
use Magento\Quote\Api\CartManagementInterface;
use Magento\Quote\Model\Quote;
use Magento\Sales\Api\OrderRepositoryInterface;

class CofidisEuroPlaceOrderService extends AbstractPlaceOrderService
{
    protected DataSealedForm $dataSealedForm;
    protected OrderRepositoryInterface $orderRepository;

    public function __construct(
        CartManagementInterface $cartManagement,
        DataSealedForm $dataSealedForm,
        OrderRepositoryInterface $orderRepository,
        AbstractOrderData $orderData = null
    )
    {
        parent::__construct($cartManagement, $orderData);
        $this->dataSealedForm = $dataSealedForm;
        $this->orderRepository = $orderRepository;
    }

    public function canPlaceOrder(): bool
    {
        return true;
    }

    public function getRedirectUrl(Quote $quote, ?int $orderId = null): string
    {
        $this->dataSealedForm->init('monetico_1euro', $this->orderRepository->get($orderId));
        return $this->dataSealedForm->getPaymentFormActionUrlEncoded();
    }
}
