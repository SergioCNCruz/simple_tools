<?php

/**
 * Created by PhpStorm.
 * User: Sérgio C. N. Cruz
 * Date: 29/02/16
 * Time: 06:44
 */

use SimpleTools\Pagination;

class PaginationTest extends PHPUnit_Framework_TestCase
{
    public $pagination;

    public function setUp()
    {
        $this->pagination = new Pagination(6, 92, 8);
    }

    public function testInstance()
    {
        $this->assertInstanceOf('SimpleTools\Pagination', $this->pagination);
    }

    public function testPaging()
    {
        $expectation["first"] =1;
        $expectation["pages"] =array(4, 5, 6, 7, 8);
        $expectation["last"] =12;
        $this->assertEquals($expectation,  $this->pagination->paginate());
    }

    public function testPagin2()
    {
        $pagination = new Pagination(6, 2, 8);
        $expectation["first"] =1;
#        $expectation["pages"] =array(4, 5, 6, 7, 8);
        $expectation["error"][] = "Devem haver mais itens para haver paginação";
        $expectation["last"] =null;
        $this->assertEquals($expectation,  $pagination->paginate());
    }
}