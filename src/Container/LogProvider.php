<?php

namespace Sx\Log\Container;

use Sx\Container\Injector;
use Sx\Container\ProviderInterface;
use Sx\Log\ErrorLog;
use Sx\Log\LogInterface;

/**
 * Default configuration for the dependency injection from sx-container.
 */
class LogProvider implements ProviderInterface
{
    /**
     * Adds the standalone error log as the default logger.
     *
     * @param Injector $injector
     */
    public function provide(Injector $injector): void
    {
        $injector->set(LogInterface::class, ErrorLog::class);
    }
}
