<?php
namespace Sx\Log;

/**
 * An interface for a generic logger.
 */
interface LogInterface
{
    /**
     * Must be implemented to output the message to the default priority.
     *
     * @param string $message
     */
    public function log(string $message) : void;
}
