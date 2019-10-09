<?php

namespace Illuminate256\SoftRegister;

use Illuminate256\SoftRegister\Classes\Registration;

/**
 * Class SoftRegister
 * @package Illuminate256\SoftRegister
 *
 */
class SoftRegister
{
    /**
     * SmsResolver constructor.
     */
    public function __construct()
    {

    }

    /** @return SoftRegister */
    public static function instance(): SoftRegister
    {
        return (new SoftRegister);
    }

    public function register($phone)
    {
        return (new Registration($phone))->register();
    }
}
