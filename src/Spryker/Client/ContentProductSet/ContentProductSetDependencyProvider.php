<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ContentProductSet;

use Spryker\Client\ContentProductSet\Dependency\Client\ContentProductSetToContentStorageClientBridge;
use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

class ContentProductSetDependencyProvider extends AbstractDependencyProvider
{
    /**
     * @var string
     */
    public const CLIENT_CONTENT_STORAGE = 'CLIENT_CONTENT_STORAGE';

    public function provideServiceLayerDependencies(Container $container): Container
    {
        $container = parent::provideServiceLayerDependencies($container);

        $container = $this->addContentStorage($container);

        return $container;
    }

    protected function addContentStorage(Container $container): Container
    {
        $container->set(static::CLIENT_CONTENT_STORAGE, function (Container $container) {
            return new ContentProductSetToContentStorageClientBridge(
                $container->getLocator()->contentStorage()->client(),
            );
        });

        return $container;
    }
}
