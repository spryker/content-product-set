<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ContentProductSet\Executor;

use Generated\Shared\Transfer\ContentProductSetTypeTransfer;
use Generated\Shared\Transfer\ContentTypeContextTransfer;

interface ContentProductSetTermExecutorInterface
{
    public function execute(ContentTypeContextTransfer $contentTypeContextTransfer): ContentProductSetTypeTransfer;
}
