<?php

    namespace Alambagaskara\BelajarPhpMvc;

use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use Monolog\Processor\HostnameProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use PHPUnit\Framework\TestCase;

    class FormatterTest extends TestCase {

       public function testFormatter() {

        $logger = new Logger(FormatterTest::class);

        $handler = new StreamHandler("php://stderr");
        $handler->setFormatter(new JsonFormatter());

        $logger->pushHandler($handler);
        $logger->pushProcessor(new GitProcessor());
        $logger->pushProcessor(new MemoryUsageProcessor());
        $logger->pushProcessor(new HostnameProcessor());
        $logger->info("Selamat Belajar PHP MVC", ["username" => "Alam"]);
        $logger->info("Belajar PHP Logging", ["username" => "Alam"]);

        self::assertNotNull($logger);

       }
    }