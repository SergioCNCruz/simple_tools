<?php
/**
 * Created by PhpStorm.
 * User: Sérgio C. N. Cruz
 * Date: 28/02/16
 * Time: 18:17
 */

namespace SimpleTools;

/**
 * Class Validate
 * @package SimpleTools
 */
class Pagination
{
    /**
     * @var int Number of the current page
     */
    private $current;

    /**
     * @var int Number of rows in the db
     */
    private $total;

    /** @var  int Number of size rows in each page */
    private $size;

    /**
     * @var number count of total pages
     */
    private $pages;

    private $end;
    private $beginning;
    private $return;
    private $error;

    /**
     * Pagination constructor.
     * @param int $current
     * @param int $total
     * @param $size
     */
    function __construct($current = 0, $total = 0, $size)
    {
        $this->current = $current;
        $this->setTotal($total);
        $this->setSize($size);

        $this->setPage();
    }

    /**
     * @param $total
     */
    private function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @param $size
     */
    private function setSize($size)
    {
        if (!empty($size)) {
            $this->size = $size;
        } else {
            $this->error[] = "Deve haver ao menos um item por página";
        }
    }

    /**
     *
     */
    private function setPage()
    {
        if ($this->total > $this->size) {
            $this->pages = ceil($this->total / $this->size);
        } else {
            $this->error[] = "Devem haver mais itens para haver paginação";
        }
    }

    /**
     * Set the begin page button
     */
    private function setBegginning()
    {
        $this->beginning = $this->current < 4 ? 1 : ($this->current > ($this->pages - 4) ? ($this->pages - 4) : ($this->current - 2));
    }

    /**
     * Set the last page button
     */
    private function setEnd()
    {
        $this->end = ($this->pages < 5) ? $this->pages : $this->beginning + 4;
    }

    /**
     * @return array
     */
    private function getPosition()
    {
        $this->return['first'] = 1;
        for ($i = $this->beginning; $i <= $this->end; $i++) {
            $this->return['pages'][] = $i;
        }
        $this->return['last'] = $this->pages;
    }

    /**
     * @return mixed
     */
    public function paginate()
    {
        $this->setBegginning();
        $this->setEnd();
        $this->getPosition();
        if ($this->error) {
            $this->return['error'] = $this->error;
        }
        return $this->return;
    }
}