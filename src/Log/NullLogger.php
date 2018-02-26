<?php

namespace Contentful\Core\Log;

use Psr\Log\LoggerInterface;

class NullLogger implements LoggerInterface
{
    /**
     * {@inheritdoc}
     */
    public function emergency($message, array $context = [])
    {
    }

    /**
     * {@inheritdoc}
     */
    public function alert($message, array $context = [])
    {
    }

    /**
     * {@inheritdoc}
     */
    public function critical($message, array $context = [])
    {
    }

    /**
     * {@inheritdoc}
     */
    public function error($message, array $context = [])
    {
    }

    /**
     * {@inheritdoc}
     */
    public function warning($message, array $context = [])
    {
    }

    /**
     * {@inheritdoc}
     */
    public function notice($message, array $context = [])
    {
    }

    /**
     * {@inheritdoc}
     */
    public function info($message, array $context = [])
    {
    }

    /**
     * {@inheritdoc}
     */
    public function debug($message, array $context = [])
    {
    }

    /**
     * {@inheritdoc}
     */
    public function log($level, $message, array $context = [])
    {
    }
}
