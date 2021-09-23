<?php

namespace Amz\VendorDirectFulfillmentInventory\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the submitInventoryUpdate operation.
 */
class SubmitInventoryUpdateResponse extends AbstractModel
{
    /**
     * The response payload for the submitInventoryUpdate operation.
     *
     * @var \Amz\VendorDirectFulfillmentInventory\Model\TransactionReference
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentInventory\Model\ErrorList
     */
    public $errors = null;
}
