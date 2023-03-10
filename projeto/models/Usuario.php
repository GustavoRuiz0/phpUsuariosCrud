<?php
class Usuario
{
    private $id;
    private $nome;
    private $email;

    public function getId()
    {
        return $this->id;
    }


    public function setId($i)
    {
        $this->id = trim($i);
    }


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($n)
    {
        $this->nome = trim(ucwords($n));
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($e)
    {
        $this->id = strtolower(trim($e));
    }

}


interface UsuarioDAO
{
    public function add(Usuario $u);
    public function findAll();

    public function findById($id);

    public function update(Usuario $u);

    public function delete($id);

}



?>