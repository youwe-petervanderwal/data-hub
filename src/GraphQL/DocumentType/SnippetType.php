<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\DataHubBundle\GraphQL\DocumentType;

use Pimcore\Bundle\DataHubBundle\GraphQL\Service;

class SnippetType extends PageSnippetType
{

    /**
     * PageType constructor.
     * @param Service $graphQlService
     * @param DocumentElementType $documentElementType
     * @param array $config
     * @param array $context
     */
    public function __construct(Service $graphQlService, DocumentElementType $documentElementType, $config = ["name" => "document_snippet"], $context = []) {
        parent::__construct($graphQlService, $documentElementType, $config, $context);
    }
}