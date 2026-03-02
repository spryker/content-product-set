<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ContentProductSet\Dependency\Client;

use Generated\Shared\Transfer\ContentTypeContextTransfer;

interface ContentProductSetToContentStorageClientInterface
{
    public function findContentTypeContextByKey(string $contentKey, string $localeName): ?ContentTypeContextTransfer;
}
