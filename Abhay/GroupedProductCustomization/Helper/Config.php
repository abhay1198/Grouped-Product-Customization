<?php

namespace Abhay\GroupedProductCustomization\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Config extends AbstractHelper
{
    const CONFIG_MODULE_ENABLE_XPATH = 'abhay/general/enable';
   
    public function isModuleEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_MODULE_ENABLE_XPATH);
    }
}