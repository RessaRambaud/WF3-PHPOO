<?php


class Member
{
    //intégration du trait  StingUtils dans la classe
    use StringUtils;
    /*
     * @var string
     *
     * */
    private $firstname;

    /**
     * @return mixed
     */
    public function getFirstname():string
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return Member
     */
    public function setFirstname(string $firstname):Member
    {
        $this->firstname = $firstname;
        return $this;
    }
    public function displayFirstname($color="black")
    {
        //appel de la méthode venant du trait
        echo $this->asParagraph($this->firstname,$color);
    }
}