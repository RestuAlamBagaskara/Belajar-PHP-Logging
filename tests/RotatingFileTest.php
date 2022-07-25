<?php

    namespace Alambagaskara\BelajarPhpMvc;

use Monolog\Handler\RotatingFileHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

    class RotatingFileTest extends TestCase {

        public function testRotatingFile() {

            $logger = new Logger(RotatingFileTest::class);
            $logger->pushHandler(new StreamHandler("php://stderr"));
            $logger->pushHandler(new RotatingFileHandler(__DIR__ . "/../app.log", 10, Logger::INFO));

            $logger->info("Belajar PHP Logging");
            $logger->info("Belajar Logging");
            $logger->info("Belajar PHP Logging Lagi");
            
            self::assertNotNull($logger);
        }
    }