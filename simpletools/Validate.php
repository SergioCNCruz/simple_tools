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
        $this->errors[] = (!filter_var($value, FILTER_VALIDATE_URL)) ? "Envie uma URL válidano campo ".$campo : "";
    }

    /**
     * @param $campo
     * @param $value
     */
    protected function email($campo, $value)
    {
        $this->errors[] = (!filter_var($value, FILTER_VALIDATE_EMAIL)) ? "Envie um email válido no campo ".$campo : "";
    }

    /**
     * @param $campo
     * @param $value
     */
    protected function int($campo, $value)
    {
        $this->errors[] = (!filter_var($value, FILTER_VALIDATE_INT)) ? "Esse valor não é um inteiro  válido no campo ".$campo : "";
    }

    /**
     * @param $campo
     * @param $value
     */
    protected function phone($campo, $value)
    {
        $this->errors[] = (!preg_match('/^(\(?[2-9]{1}[0-9]{2}\)?|[0-9]{3,3}[-. ]?)[ ][0-9]{3,3}[-. ]?[0-9]{4,4}$/', $value)) ? "Informe um número válido de telefone no campo ".$campo : "";
    }

}