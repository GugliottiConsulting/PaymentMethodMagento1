<?php
/**
 * Gugliotti_Stripe_Helper_Data
 */

/**
 * Class Gugliotti_Stripe_Helper_Data
 *
 * Gugliotti Stripe Main Helper.
 *
 * @author Andre Gugliotti <andre@gugliotti.com.br>
 * @version 0.1.0
 * @category Training Modules
 * @package Gugliotti News
 * @license GNU General Public License, version 3
 */
class Gugliotti_Stripe_Helper_Data extends Mage_Core_Helper_Abstract
{
	/**
	 * getConfigData
	 *
	 * Returns configuration value for a given key.
	 * @param string $code
	 * @return mixed
	 */
	public function getConfigData($code)
	{
		return Mage::getStoreConfig('payment/gugliotti_stripe/' . $code);
	}

	/**
	 * isSupportedCurrency
	 *
	 * Returns true if a given currency is supported.
	 * @param $currencyCode
	 * @return bool
	 */
	public function isSupportedCurrency($currencyCode)
	{
		$supportedCurrencies = explode(',', $this->getConfigData('supported_currencies'));
		if (in_array($currencyCode, $supportedCurrencies)) {
			return true;
		}
		return false;
	}
}
