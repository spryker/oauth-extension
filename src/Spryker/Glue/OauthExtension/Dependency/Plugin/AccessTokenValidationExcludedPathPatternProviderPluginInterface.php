<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types = 1);

namespace Spryker\Glue\OauthExtension\Dependency\Plugin;

/**
 * Implement this interface to exclude request paths from the Glue storefront access token validation.
 */
interface AccessTokenValidationExcludedPathPatternProviderPluginInterface
{
    /**
     * Specification:
     * - Returns regular expressions, without delimiters, matched like a Symfony firewall `pattern`: against the percent-decoded request path, with the `s` modifier, unanchored.
     * - A pattern matches any part of the path; anchor it with `^` (and `$` where needed), or an unrelated path containing the same text is excluded too.
     * - The access token of a request whose path matches one of them is not validated, so every pattern must be covered by another authenticator or name a public path.
     * - Read once per request, on the first access token check, and cached for the rest of it.
     * - An invalid expression fails the request; it never excludes a path.
     *
     * @api
     *
     * @return list<string>
     */
    public function getExcludedPathPatterns(): array;
}
