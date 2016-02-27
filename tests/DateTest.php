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
    public function testDataClass()
    {
        $date  = new Date;

        $this->assertInstanceOf('SimpleTools\Date', $date);

        $this->assertEquals('99/88/9999', $date->revertFormat("9999-88-99"));

        $this->assertEquals('9999-88-99', $date->revertFormat("99/88/9999"));
    }
}