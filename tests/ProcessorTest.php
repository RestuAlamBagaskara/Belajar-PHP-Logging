<?php

    namespace Alambagaskara\BelajarPhpMvc;

    use Monolog\Handler\StreamHandler;
    use Monolog\Logger;
    use Monolog\Processor\GitProcessor;
    use Monolog\Processor\MemoryUsageProcessor;
    use PHPUnit\Framework\TestCase;

    class ProcessorTest extends TestCase {

        public function testProcessorRecord() {
            $logger = new Logger(ProcessorTest::class);
            $logger->pushHandler(new StreamHandler("php://stderr"));
            $logger->pushProcessor(new GitProcessor());
            $logger->pushProcessor(new MemoryUsageProcessor());
            $logger->pushProcessor(function ($record){
                $record["extra"]["alam"] = [
                    "author" => "Restu Alam",
                    "app" => "Belajar PHP Logging"
                ];
                return $record;
            });

            $logger->info("Hello World", ["username" => "Alam"]);

            self::assertNotNull($logger);
        }
    }