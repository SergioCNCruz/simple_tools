<?php

/**
 * Created by PhpStorm.
 * User: Sérgio C. N. Cruz
 * Date: 29/02/16
 * Time: 06:44
 */

use SimpleTools\Validate;

class ValidateTest extends PHPUnit_Framework_TestCase
{
    public $validate;

    public function setUp()
    {
        $this->validate = new Validate;
    }

    public function testInstance()
    {
        $this->assertInstanceOf('SimpleTools\Validate', $this->validate);
    }
}