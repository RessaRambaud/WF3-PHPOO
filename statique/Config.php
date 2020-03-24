<?php
class Config
{
    /**
     * 
     * Une constante de classe
     * @var string
     */
    const RACINE_WEB='/php/boutique';

    /**
     * @param string $file
     * 
     */
    public static function getPath(string $file)
    {
        //self = la class elle-même
        return self::RACINE_WEB . $file;
    }
}