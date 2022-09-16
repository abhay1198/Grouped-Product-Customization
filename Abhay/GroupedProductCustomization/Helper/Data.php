<?php

namespace Abhay\GroupedProductCustomization\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const CONFIG_MODULE_ENABLE_XPATH = 'abhay/general/enable';
    const CONFIG_MODULE_CHILD_PRODUCT_SKU = 'abhay/general/child_product/sku';
    const CONFIG_MODULE_CHILD_PRODUCT_SALABLE = 'abhay/general/child_product/salable';

    public $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $context->getScopeConfig();
        parent::__construct($context);
    }

    public function isModuleEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_ENABLE_XPATH);
    }

    public function isChildProductSkuEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_CHILD_PRODUCT_SKU);
    }

    public function isChildProductSalableQtyEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_CHILD_PRODUCT_SALABLE);
    }
}