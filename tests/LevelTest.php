<?php

    namespace Alambagaskara\BelajarPhpMvc;

    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use PHPUnit\Framework\TestCase;

    class LevelTest extends  TestCase {

        public function testLevel() {

            $logger = new Logger(LevelTest::class);
            $logger->pushHandler(new StreamHandler("php://stderr")); //Kirim Log ke Console
            $logger->pushHandler(new StreamHandler(__DIR__ . "/../application.log")); //Kirim log ke dalam file
            $logger->pushHandler(new StreamHandler(__DIR__ . "/../error.log", Logger::ERROR)); //Kirm log ke dalam file

            $logger->debug("Ini Debug");
            $logger->info("Ini Info");
            $logger->notice("Ini Notice");
            $logger->warning("Ini Warnning");
            $logger->error("Ini Error");
            $logger->critical("Ini Critical");
            $logger->alert("Ini Alert");
            $logger->emergency("Ini Emergency");

            self::assertNotNull($logger);
        }
    }