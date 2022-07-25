<?php

    namespace Alambagaskara\BelajarPhpMvc;

    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use PHPUnit\Framework\TestCase;

    class LoggingTest extends TestCase {

        public function testLogging() {

            $logger = new Logger(LoggingTest::class);

            $logger->pushHandler(new StreamHandler("php://stderr")); //Kirim Log ke console
            $logger->pushHandler(new StreamHandler(__DIR__ . "/../application.log")); //Kirm log ke dalam file

            $logger->info("Selamat Belajar PPHP Logging");
            $logger->info("Belajar PHP");
            $logger->info("Info isi dari logging");

            self::assertNotNull($logger);
        }
    }