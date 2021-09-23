<?php

namespace Amz\VendorDirectFulfillmentInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request body for the submitInventoryUpdate operation.
 */
class SubmitInventoryUpdateRequest extends AbstractModel
{
    /**
     * Inventory details required to update some or all items for the requested
     * warehouse.
     *
     * @var \Amz\VendorDirectFulfillmentInventory\Model\InventoryUpdate
     */
    public $inventory = null;
}
