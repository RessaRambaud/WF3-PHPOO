<?php


class User
{
    /**
     * @var string
     */
    private $firstname;
    private $lastname;


    /**
     * @return mixed
     */
    public function getLastname():string
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return User
     */
    public function setLastname(string $lastname):User
    {
        if(ctype_digit($lastname))
        {
            throw new InvalidArgumentException('Le last name doit pas être un npmbre');
        }
        $this->lastname = $lastname;
        return $this;
    }
    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return User
     *
     * @throws exception
     */
    public function setFirstname(string $firstname): User
    {
        if(ctype_digit($firstname))
        {
            throw new exception('Le prenom ne doit pas être nombre');
        }
        $this->firstname = $firstname;
        return $this;
    }

}