<?php
require_once 'Volume.php';
require_once 'Texture.php';


/**Une classe peut implementer plusieurs interfaces*/
class Brique implements Volume ,Texture
{

    public function getMatiere(): string
    {
        return 'terre';
    }

    public function getCouleur(): string
    {

        return 'rouge';
    }

    /**
     * @inheritDoc
     */
    public function getForme(): string
    {

        return 'Parallélèpipède rectangle';
    }
}