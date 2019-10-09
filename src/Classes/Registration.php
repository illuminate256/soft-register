<?php

namespace Illuminate256\SoftRegister\Classes;

class Registration
{
    public $phone;

    public function __construct($phone)
    {
        $this->phone = $phone;
    }

    public function register()
    {
        return (new RequestValidation())->validation($this->phone);
    }
}