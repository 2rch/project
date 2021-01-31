<?php
namespace Tools\logger;
class Logger implements LoggerInterface
{
    public $name;
    public static $WrongId;

    public function __construct(string $name = '')
    {
        $this->name = $name;
    }

    public function emergency($message, array $context = array())
    {
        $this->log(LogLevel::EMERGENCY, $message, $context);
    }

    public function alert($message, array $context = array())
    {
        $this->log(LogLevel::ALERT, $message, $context);
    }

    public function critical($message, array $context = array())
    {
        $this->log(LogLevel::CRITICAL, $message, $context);
    }

    public function error($message, array $context = array())
    {
        $this->log(LogLevel::ERROR, $message, $context);
    }

    public function warning($message, array $context = array())
    {
        $this->log(LogLevel::WARNING, $message, $context);
    }

    public function notice($message, array $context = array())
    {
        $this->log(LogLevel::NOTICE, $message, $context);
    }

    public function info($message, array $context = array())
    {
        $this->log(LogLevel::INFO, $message, $context);
    }

    public function debug($message, array $context = array())
    {
        $this->log(LogLevel::DEBUG, $message, $context);
    }

    public function log($level, $message, array $context = array())
    {
        if ($this->name === '') {
            $handle = fopen(__DIR__ . "/logs/Logs.txt", 'a');
            $date = date('Y-m-d h:i:s');
            $context = implode(',', $context);
            $message = "Date: {$date}\nLevel: {$level}\nMessage: {$message}\nContext: {$context}\n______________________\n";
            fwrite($handle, $message);
            fclose($handle);
            self::$WrongId = $context;
        }
    }
}