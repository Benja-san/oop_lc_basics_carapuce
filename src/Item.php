<?php

class Item{

    private string $name = "super bonbon";
    private int $effect = 1;

    

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
     * Get the value of effect
     */ 
    public function getEffect(): int
    {
        return $this->effect;
    }

    /**
     * Set the value of effect
     *
     * @return  self
     */ 
    public function setEffect($effect)
    {
        $this->effect = $effect;

        return $this;
    }
}