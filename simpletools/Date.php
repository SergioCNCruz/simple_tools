<?php

/**
 * @Author Sérgio C. N. Cruz <me@sergiocncruz.com.br>
 */
namespace SimpleTools;

class Date
{
    function __construct($date)
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
}
