<?php


class Logger
{

    public static function log(Throwable $e)
    {
        file_put_contents(
            'log.txt',
            '['.date('Y-m-d H:i:s').']'
            //fichier dans lequell'exception a été jetée
            .$e->getFile()
            .'line'.$e->getLine()
                //le message déclaréà l'instanciation de l'exception
            .$e->getMessage()
                //ce qui s'est passé dans le code pour parvenir à l'exception jétée
            .PHP_EOL.$e->getTraceAsString() .PHP_EOL,
            FILE_APPEND
        );
    }
}