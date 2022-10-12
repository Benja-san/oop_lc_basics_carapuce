<?php

class Pokemon{

    //Properties of my pokemon class
    private string $name;
    private int $level = 5;
    private array $type;
    private string $picture;
    private ?Item $retrieve;
    private ?Item $eat;

    //Magical methods
    public function __construct(string $name, array $type, string $picture)
    {
        $this->name = $name;
        $this->type = $type;
        $this->picture = $picture;
    }

    //Getters and setters

    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of level
     */ 
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * Set the value of level
     *
     * @return  self
     */ 
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType(): array
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }



    /**
     * Get the value of retrieve
     */ 
    public function getRetrieve(): string
    {
        return $this->retrieve ? $this->retrieve->getName() : "nothing";
    }

    /**
     * Set the value of retrieve
     *
     * @return  self
     */ 
    public function setRetrieve(?Item $retrieve)
    {
        $this->retrieve = $retrieve;

        return $this;
    }

    /**
     * Get the value of eat
     */ 
    public function getEat(): string
    {
        return "Carapuce is now level " . $this->getLevel() ;
    }

    /**
     * Set the value of eat
     *
     * @return  void
     */ 
    public function setEat(?Item $eat)
    {
        $this->level += $eat->getEffect();
        $this->setRetrieve(null);
    }
}