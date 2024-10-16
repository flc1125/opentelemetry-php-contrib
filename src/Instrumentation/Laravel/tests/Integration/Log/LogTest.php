<?php

namespace OpenTelemetry\Tests\Contrib\Instrumentation\Laravel\Integration\Log;

use Psr\Log\LoggerInterface;
use OpenTelemetry\Tests\Contrib\Instrumentation\Laravel\Integration\TestCase;

class LogTest extends TestCase
{
    private LoggerInterface $logger;
    public function setUp(): void
    {
        parent::setUp();

        /** @psalm-suppress PossiblyNullReference */
        $this->logger = $this->app->make(LoggerInterface::class);
    }

    public function testLog()
    {
        $this->logger->info('info');
        self::assertEquals("info", $this->storage[0]->getBody());
        //$this->logger->error('error');
        //$this->logger->warning('warning');
        //$this->logger->debug('debug');
        //$this->logger->critical('critical');
        //$this->logger->alert('alert');
        //$this->logger->notice('notice');
        //$this->logger->emergency('emergency');

    }
}