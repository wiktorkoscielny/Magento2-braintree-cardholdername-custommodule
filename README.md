Braintree Cardholder Name Field Example for Magento 2
-
This is an example module demonstrating how to add a custom cardholder name field to the Braintree transaction request within Magento 2.

### Additional Information
- No need to register cardholder name field within the Braintree Control Panel, neither Braintree Sandbox Account Panel
- [Braintree developer documentation](https://developer.paypal.com/braintree/docs/reference/request/transaction/sale/php#custom-fields)
### Instructions
- Override Braintree form and add a new field [[Exaple]](https://github.com/wiktorkoscielny/Magento2-braintree-cardholdername-custommodule/blob/edbd6594b8f3c067a2cacf8c211bc36cbb7d53ea/app/design/frontend/Theme/Luma/PayPal_Braintree/web/template/payment/form.html#L49)
- Render a new hosted field in overridden method renderer [[Exaple]](https://github.com/wiktorkoscielny/Magento2-braintree-cardholdername-custommodule/blob/edbd6594b8f3c067a2cacf8c211bc36cbb7d53ea/app/design/frontend/Theme/Luma/PayPal_Braintree/web/js/view/payment/method-renderer/hosted-fields.js#L95)
- Add a preference for class that implements PayPal\Braintree\Gateway\Response\VaultDetailsHandler [[Example]](https://github.com/wiktorkoscielny/Magento2-braintree-cardholdername-custommodule/blob/edbd6594b8f3c067a2cacf8c211bc36cbb7d53ea/app/code/Vendor/Module/etc/di.xml#L15)
- Extend VaultDetailsHandler class and add new get payment token [[Exaple]](https://github.com/wiktorkoscielny/Magento2-braintree-cardholdername-custommodule/blob/edbd6594b8f3c067a2cacf8c211bc36cbb7d53ea/app/code/Vendor/Module/Gateway/Rewrite/Response/VaultDetailsHandler.php#L112)
- At the end you can render new data in e.g. Magento\Vault\Block\CardRendererInterface template like `$block->getCardHolderName()` 