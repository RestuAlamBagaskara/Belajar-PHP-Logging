<?php

    namespace Alambagaskara\BelajarPhpMvc;

    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use PHPUnit\Framework\TestCase;

    class ContextTest extends TestCase {

        public function testHandler() {

            $logger = new Logger(ContextTest::class);
            $logger->pushHandler(new StreamHandler("php://stderr")); //Kirim Log ke console

            $logger->info("Selamat Belajar PHP Logging", ["Username" => "Alam"]);
            $logger->info("Belajar PHP Logging", ["Username" => "bagas"]);

            self::assertNotNull($logger);
        }
    }