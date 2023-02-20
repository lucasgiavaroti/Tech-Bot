<?php
class Usuario
{
    private $nome;
    private $email;
    private $senha;
    private $id;

    private $permissao;

    public function __construct()
    {
    }
    function setNome($nome)
    {
        $this->nome = $nome;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function setSenha($senha)
    {
        $this->senha = $senha;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    function getNome()
    {
        return $this->nome;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getSenha()
    {
        return $this->senha;
    }
    function getId()
    {
        return $this->id;
    }
}
?>