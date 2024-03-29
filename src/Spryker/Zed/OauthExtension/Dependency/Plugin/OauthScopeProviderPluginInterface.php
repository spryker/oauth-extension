<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\OauthExtension\Dependency\Plugin;

use Generated\Shared\Transfer\OauthScopeRequestTransfer;

interface OauthScopeProviderPluginInterface
{
    /**
     * @api
     *
     * Specification:
     *  - Method which should return if it can handle oauth client request
     *
     * @param \Generated\Shared\Transfer\OauthScopeRequestTransfer $oauthScopeRequestTransfer
     *
     * @return bool
     */
    public function accept(OauthScopeRequestTransfer $oauthScopeRequestTransfer): bool;

    /**
     * @api
     *
     * Specification:
     *  - Method should return array of scopes which is valid for current request, merge with OauthScopeRequestTransfer.defaultScopes if you want to keep them
     *
     * @param \Generated\Shared\Transfer\OauthScopeRequestTransfer $oauthScopeRequestTransfer
     *
     * @return array<\Generated\Shared\Transfer\OauthScopeTransfer>
     */
    public function getScopes(OauthScopeRequestTransfer $oauthScopeRequestTransfer): array;
}
