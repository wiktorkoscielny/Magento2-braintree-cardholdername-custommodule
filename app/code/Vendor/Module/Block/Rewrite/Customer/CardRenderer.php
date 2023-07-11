<?php
/**
 * Vendor_Module
 *
 * @category Vendor
 * @package  Vendor_Module
 * @author   Wiktor Koscielny <wiktorkoscielny@gmail.com>
 */

namespace Vendor\Module\Block\Rewrite\Customer;

use PayPal\Braintree\Block\Customer\CardRenderer as CardRendererSource;

/**
 * Class CardRenderer extends source class to get new payment token details
 */
class CardRenderer extends CardRendererSource
{
    /**
     * Get cardholder name data
     * @return string
     */
    public function getCardHolderName(): string
    {
        return $this->getTokenDetails()['cardHolderName'] ?? '';
    }
}
