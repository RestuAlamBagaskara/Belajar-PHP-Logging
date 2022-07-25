<?php

    namespace Alambagaskara\BelajarPhpMvc;

    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use PHPUnit\Framework\TestCase;

    class HandlerTest extends TestCase {

        public function testHandler() {

            $logger = new Logger(HandlerTest::class);

            // Kirim informasi Log ke console
            $logger->pushHandler(new StreamHandler("php://stderr"));
            //Kirim log ke dalam file application.log
            $logger->pushHandler(new StreamHandler(__DIR__ . "/../application.log")); 

            self::assertNotNull($logger);
            self::assertEquals(2, sizeof($logger->getHandlers()));
        }
    }