<?php

namespace Yansongda\Pay\Exception;

use Throwable;

class FrozenServiceException extends ServiceException
{
    /**
     * Bootstrap.
     *
     * @param string          $message
     * @param int             $code
     * @param array           $raw
     * @param \Throwable|null $previous
     */
    public function __construct($message = 'Frozen Service Exception!', $code = self::FROZEN_SERVICE, $raw = [], Throwable $previous = null)
    {
        parent::__construct($message, $code, $raw, $previous);
    }
}