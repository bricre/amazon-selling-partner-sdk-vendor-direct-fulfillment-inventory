<?php

namespace Amz\VendorDirectFulfillmentInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Updated inventory details for an item.
 */
class ItemDetails extends AbstractModel
{
    /**
     * The buyer selected product identification of the item. Either
     * buyerProductIdentifier or vendorProductIdentifier should be submitted.
     *
     * @var string
     */
    public $buyerProductIdentifier = null;

    /**
     * The vendor selected product identification of the item. Either
     * buyerProductIdentifier or vendorProductIdentifier should be submitted.
     *
     * @var string
     */
    public $vendorProductIdentifier = null;

    /**
     * Total item quantity available in the warehouse.
     *
     * @var \Amz\VendorDirectFulfillmentInventory\Model\ItemQuantity
     */
    public $availableQuantity = null;

    /**
     * When true, the item is permanently unavailable.
     *
     * @var bool
     */
    public $isObsolete = null;
}
