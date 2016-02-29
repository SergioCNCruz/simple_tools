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
class Validate
{
    /**
     * @var
     */
    protected $errors;

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * @param $data
     */
    public function run($data)
    {
        foreach($data as $k => $l) {
            $this->$l['type']($l['fild'], $l['value']);
        }
    }

    /**
     * @param $campo
     * @param $value
     */
    protected function url($campo, $value)
    {
        $this->errors[] = (!filter_var($value, FILTER_VALIDATE_URL)) ? "Envie uma URL válida" : "";
    }

    /**
     * @param $campo
     * @param $value
     */
    protected function email($campo, $value)
    {
        $this->errors[] = (!filter_var($value, FILTER_VALIDATE_EMAIL)) ? "Envie um email válido" : "";
    }

}