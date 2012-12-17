logger
======

A simple client

    <?php
    namespace Neto\Sample;
    
    use Neto\Log\Logger;
    
    class Something
    {
        private $logger;
        
        public function __construct(Logger $logger;)
        {
            $this->logger = $logger;
        }

        public function doSomething()
        {            
            $this->logger->log('Just logging!');
        }
    }
    
Using:

    <?php
    use Neto\Log\Logger;
    use Neto\Log\Imp\EchoImp\EchoLoggerCreator;
    
    $logger = new Logger();
    $logger->setLogger(new EchoLoggerCreator()); //just a fucking stupid sample
    
    $something = new Something($logger);
    $something->doSomething();