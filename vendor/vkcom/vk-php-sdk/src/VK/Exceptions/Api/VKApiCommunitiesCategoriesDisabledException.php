<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;
use VK\Exceptions\VKApiException;

class VKApiCommunitiesCategoriesDisabledException extends VKApiException {
    /**
     * VKApiCommunitiesCategoriesDisabledException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(1311, 'Catalog categories are not available for this user', $error);
    }
}