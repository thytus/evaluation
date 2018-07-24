<?php

class Cat
{
    /**
     * Firstname
     *
     * Store the current object prenom value
     *
     * @var string
     */
    public $firstname;
    
    /**
     * Age
     *
     * Store the current object age value
     *
     * @var int
     */
    public $age;
    
    /**
     * Color
     *
     * Store the current object couleur value
     *
     * @var string
     */
    public $color;
    
    /**
     * Sex
     *
     * Store the current object sexe value
     *
     * @var string
     */
    public $sex;
    
    private static $allowedSex = ['male', 'female', 'other'];
    
    /**
     * Race
     * 
     * Store the current object race value
     * 
     * @var string
     */
    public $race;
    
    
    /**
     * Get firstname
     * 
     * Return the firstname of the current cat instance
     * 
     * @return string
     */
    public function getFirstname() : string
    {
        return $this->name;
    }

    /**
     * Get age
     * 
     * Return the age of the current cat instance
     * 
     * @return int
     */
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * Get color
     * 
     * Return the gender of the current cat instance
     * 
     * @return string
     */
    public function getColor() : string
    {
        return $this->color;
    }

    /**
     * Get sex
     * 
     * Return the gender of the current cat instance
     * 
     * @return string
     */
    public function getSex() : string
    {
        return $this->sex;
    }

    /**
     * Get race
     * 
     * Return the race of the current cat instance
     * 
     * @return string
     */
    public function getRace() : string
    {
        return $this->race;
    }


     /**
     * Set firstname
     *
     * Set the current cat instance age value
     *
     * @param int $firstname The new age
     *
     * @return $this
     */
    public function setFirstname(int $firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }
    
    /**
     * Set age
     *
     * Set the current cat instance age value
     *
     * @param int $age The new age
     *
     * @return $this
     */
    public function setAge(int $age)
    {
        $this->age = $age;
        return $this;
    }
    
    /**
     * Set sex
     *
     * Set the current cat instance sex value
     *
     * @param int $sex 
     *
     * @return $this
     */
    public function setSex(int $sexe)
    {
        $this->sexe = $sexe;
        return $this;
    }
    
    /**
     * Set race
     *
     * Set the current cat instance race value
     *
     * @param int $race The new race
     *
     * @return $this
     */
    public function setRace(int $race)
    {
        $this->race = $race;
        return $this;
    }


    /**
     * From array
     * 
     * Create a new Cat instance from an array of value
     * 
     * @param array $definition The array of value
     * 
     * @return Cat
     */
    public static function fromArray(array $definition)
    {
        $logger2 = \Logger::getInstance();
        $logger2->log('2');
        $cat = new Cat();
        $cat->setFirstname($definition['firstname'] ?? '')
            ->setAge((int)$definition['age'] ?? '')
            ->setColor($definition['color'] ?? '')
            ->setSex(Sex::fromArray($definition['sex'] ?? []))
            ->setRace($definition['race'] ?? '');
        
        return $cat;
    }
}
