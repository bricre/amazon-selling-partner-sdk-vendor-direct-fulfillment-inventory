<?php

namespace Amz\VendorDirectFulfillmentInventory\Api;

use Amz\VendorDirectFulfillmentInventory\Model\SubmitInventoryUpdateRequest as SubmitInventoryUpdateRequest;
use Amz\VendorDirectFulfillmentInventory\Model\SubmitInventoryUpdateResponse as SubmitInventoryUpdateResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class UpdateInventory extends AbstractAPI
{
    /**
     * Submits inventory updates for the specified warehouse for either a partial or
     * full feed of inventory items.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $warehouseId Identifier for the warehouse for which to update inventory
     * @param SubmitInventoryUpdateRequest $Model Submits inventory updates for the
     *                                            specified warehouse for either a partial or full feed of inventory items.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return SubmitInventoryUpdateResponse
     */
    public function submitInventoryUpdate($warehouseId, SubmitInventoryUpdateRequest $Model): SubmitInventoryUpdateResponse
    {
        return $this->client->request('submitInventoryUpdate', 'POST', "vendor/directFulfillment/inventory/v1/warehouses/{$warehouseId}/items",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
