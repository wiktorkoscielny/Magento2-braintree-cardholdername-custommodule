<?php
/**
 * Vendor_Module
 *
 * @category Vendor
 * @package  Vendor_Module
 * @author   Wiktor Koscielny <wiktorkoscielny@gmail.com>
 */

declare(strict_types=1);

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Vendor_Module',
    __DIR__
);
