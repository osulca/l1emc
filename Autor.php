<?php
class Autor{
    private $nombre;
    private $email;
    private $genero;

    public function __construct(String $nombre, String $email, String $genero)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->genero = $genero;
    }

    public function setNombre($nombre): void    {
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero): void
    {
        $this->genero = $genero;
    }

    public function __toString(){
        return $this->nombre."<br>".
                "email: ".$this->email;
    }
}
