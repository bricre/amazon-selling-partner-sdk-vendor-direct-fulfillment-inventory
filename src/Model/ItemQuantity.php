<?php

namespace Amz\VendorDirectFulfillmentInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of item quantity.
 */
class ItemQuantity extends AbstractModel
{
    /**
     * Quantity of units available for a specific item.
     *
     * @var int
     */
    public $amount = null;

    /**
     * Unit of measure for the available quantity.
     *
     * @var string
     */
    public $unitOfMeasure = null;
}
