<?php

namespace Kernel\Exceptions;

/**
 * @brief This exception is thrown when something bad occurs about helpers building.
 *
 * @see Kernel::Core::Factory::HelpersFactory.
 */
class HelpersFactoryException extends \Exception
{
    /**
     * @brief Constructor.
     * @param String $message The exception message.
     * @param Int $code The exception code.
     */
    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }
}

?>