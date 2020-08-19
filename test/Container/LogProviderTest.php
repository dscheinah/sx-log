<?php
namespace Sx\LogTest\Container;

use Sx\Container\Injector;
use Sx\Log\Container\LogProvider;
use PHPUnit\Framework\TestCase;
use Sx\Log\LogInterface;

class LogProviderTest extends TestCase
{
    public function testProvide(): void
    {
        $injector = new Injector();
        $provider = new LogProvider();
        $provider->provide($injector);
        self::assertTrue($injector->has(LogInterface::class));
    }
}
