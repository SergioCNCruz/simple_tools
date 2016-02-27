<?php

/**
 * @Author Sérgio C. N. Cruz <me@sergiocncruz.com.br>
 */

namespace SimpleTools;

use Symfony\Component\Validator\Constraints\Null;

/**
 * Class Date
 * @package SimpleTools
 */
class Date
{

    /**
     *
     */
    function __construct()
    {

    }

    function dataExtencion($date)
    {
        if(stripos($date, "-"))
        {
            list($ano, $mes, $dia) = explode("-", $date);
            $m = $this->getMonths();
            $mes = str_replace("0", "", $mes);
            $retorno = $dia." de ".$m[$mes]." de ".$ano;
        }
        return $retorno;
    }

    /**
     * @param $date
     * @return string
     */
    function revertFormat($date)
    {
        $retorno = "erro";

        if(stripos($date, "/"))
        {
            list($dia, $mes, $ano) = explode("/", $date);
            $retorno = $ano."-".$mes."-".$dia;
        }
        elseif(stripos($date, "-"))
        {
            list($ano, $mes, $dia) = explode("-", $date);
            $retorno = $dia."/".$mes."/".$ano;
        }

        return $retorno;
    }

    /**
     * @return array
     */
    private function getMonths()
    {
        return [
            null,
            'Janeiro',
            'Fevereiro',
            'Março',
            'Abril',
            'Maio',
            'Junho',
            'Julho',
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro'
        ];
    }

}
