<?php

namespace Abhay\GroupedProductCustomization\Block\Product\View\Type;

use Magento\GroupedProduct\Block\Product\View\Type\Grouped as MagentoGrouped;
use Abhay\GroupedProductCustomization\Helper\Data;
use Magento\Catalog\Block\Product\Context;
use Magento\Framework\Stdlib\ArrayUtils;
use Magento\InventorySalesAdminUi\Model\GetSalableQuantityDataBySku;

class Grouped extends MagentoGrouped
{

    private $helper;
    protected $getSalableQuantityDataBySku;

    public function __construct(
        GetSalableQuantityDataBySku $getSalableQuantityDataBySku,
        Data $helper,
        Context $context,
        ArrayUtils $arrayUtils,
        array $data = []
    ) {
        $this->getSalableQuantityDataBySku = $getSalableQuantityDataBySku;
        $this->helper = $helper;
        parent::__construct($context, $arrayUtils, $data);
    }

    public function getSaleble($sku)
    {
        $salable = $this->getSalableQuantityDataBySku->execute($sku);
        return $salable;
    }
}