<?php

/**
 * Created by PhpStorm.
 * User: Sérgio C. N. Cruz
 * Date: 26/02/16
 * Time: 15:03
 */

use SimpleTools\Date;

class DateTest extends PHPUnit_Framework_TestCase
{
    public $data;

    public function setUp()
    {
        $this->date  = new Date;
    }

    public function testDataClass()
    {
        $this->assertInstanceOf('SimpleTools\Date', $this->date);

        $this->assertEquals('99/88/9999', $this->date->revertFormat("9999-88-99"));

        $this->assertEquals('9999-88-99', $this->date->revertFormat("99/88/9999"));
    }
}