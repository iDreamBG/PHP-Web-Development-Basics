<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 23.10.2018 г.
 * Time: 20:50
 */

class Model implements Call, Brows
{
    /**
     * @param string $phone
     * @return string
     * @throws Exception
     */
    public function PhoneNumber(string $phone): string
    {
        if(preg_match_all("/[^0-9]+/", $phone)){
            throw new Exception('Invalid Number');
        }
        return "Calling... {$phone}\n";
    }

    /**
     * @param string $site
     * @return string
     * @throws Exception
     */
    public function Browse(string $site): string
    {
        if(preg_match_all("/[0-9]/", $site)){
            throw new Exception('Invalid URL');
        }
        return "Browsing: {$site}\n";
    }
}