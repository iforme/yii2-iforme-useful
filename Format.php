<?php

namespace iforme\useful;

/**
 * This is just an example.
 */
class Format
{
    /**
     * Return integers values in format (99) 99999-9999
     * @param string $phone
     * @return string
     */
    public static function Phone($phone)
    {
        $phone = Regex::OnlyInteger($phone);
        if(strlen($phone) == 10){
            $phone = '(' . substr($phone, 0, 2) . ') ' . substr($phone, 2, 4) . '-' . substr($phone, 6, 4);
        } else {
            $phone = '(' . substr($phone, 0, 2) . ') ' . substr($phone, 2, 5) . '-' . substr($phone, 7, 4);
        }
        return $phone;
    }

    /**
     * Return integers values in format 99999-999
     * @param string $cep
     * @return string
     */
    public static function CEP($cep)
    {
        $cep = Regex::OnlyInteger($cep);
        $cep = substr($cep, 0, 5) . '-' . substr($cep, 5, 3);
        return $cep;
    }

    /**
     * Return integers values in format 999.999.999-99
     * @param string $cpf
     * @return string
     */
    public static function CPF($cpf)
    {
        $cpf = Regex::OnlyInteger($cpf);
        $cpf = substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) .
                '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
        return $cpf;
    }
}
