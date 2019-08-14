<?php
class Nzpost_Eship_Helper_Data extends Mage_Core_Helper_Abstract
{
    const STORE_CONFIG_PATH_ESHIP_API_KEY  = 'eship_options/eship_settings/eship_api_key';

    public function getEShipApiKey()
    {
        return Mage::getStoreConfig(self::STORE_CONFIG_PATH_ESHIP_API_KEY);
    }
}
