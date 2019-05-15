<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\ContentProductSet;

use Spryker\Shared\Kernel\AbstractSharedConfig;

class ContentProductSetConfig extends AbstractSharedConfig
{
    /**
     * Content item product set
     */
    public const CONTENT_TYPE_PRODUCT_SET = 'Product Set';

    /**
     * Content item product set
     */
    public const CONTENT_TERM_PRODUCT_SET = 'Product Set';

    public const FUNCTION_CONTENT_PRODUCT_SET = 'content_product_set';
    public const TEMPLATE_IDENTIFIER_DEFAULT = 'default';
    public const TEMPLATE_IDENTIFIER_CART_BUTTON_BOTTOM = 'cart-button-btm';
}
