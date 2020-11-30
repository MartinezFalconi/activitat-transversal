<?php

class Participante {
    private $id_part;
    private $nom_part;
    private $apellido_part;
    private $DNI_part;
    private $fechaNac_part;
    private $sexo_part;

    function __construct($nom_part, $apellido_part, $DNI_part, $fechaNac_part, $sexo_part){
        $this->nom_part=$nom_part;
        $this->apellido_part=$apellido_part;
        $this->DNI_part=$DNI_part;
        $this->fechaNac_part=$fechaNac_part;
        $this->sexo_part=$sexo_part;
    }

    /**
     * Get the value of id_part
     */ 
    public function getId_part()
    {
        return $this->id_part;
    }

    /**
     * Set the value of id_part
     *
     * @return  self
     */ 
    public function setId_part($id_part)
    {
        $this->id_part = $id_part;

        return $this;
    }

    /**
     * Get the value of nom_part
     */ 
    public function getNom_part()
    {
        return $this->nom_part;
    }

    /**
     * Set the value of nom_part
     *
     * @return  self
     */ 
    public function setNom_part($nom_part)
    {
        $this->nom_part = $nom_part;

        return $this;
    }

    /**
     * Get the value of apellido_part
     */ 
    public function getApellido_part()
    {
        return $this->apellido_part;
    }

    /**
     * Set the value of apellido_part
     *
     * @return  self
     */ 
    public function setApellido_part($apellido_part)
    {
        $this->apellido_part = $apellido_part;

        return $this;
    }

    /**
     * Get the value of DNI_part
     */ 
    public function getDNI_part()
    {
        return $this->DNI_part;
    }

    /**
     * Set the value of DNI_part
     *
     * @return  self
     */ 
    public function setDNI_part($DNI_part)
    {
        $this->DNI_part = $DNI_part;

        return $this;
    }

    /**
     * Get the value of fechaNac_part
     */ 
    public function getFechaNac_part()
    {
        return $this->fechaNac_part;
    }

    /**
     * Set the value of fechaNac_part
     *
     * @return  self
     */ 
    public function setFechaNac_part($fechaNac_part)
    {
        $this->fechaNac_part = $fechaNac_part;

        return $this;
    }

    /**
     * Get the value of sexo_part
     */ 
    public function getSexo_part()
    {
        return $this->sexo_part;
    }

    /**
     * Set the value of sexo_part
     *
     * @return  self
     */ 
    public function setSexo_part($sexo_part)
    {
        $this->sexo_part = $sexo_part;

        return $this;
    }
}

?>