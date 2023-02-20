<?php
require_once 'conexao.php';
require_once '../class/user.php';
class usuarioDAO
{

    private $conexao;
    private $sql;
    private $resultado;
    private $tabela;

    public function __construct()
    {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
        $this->tabela = "user";
    }

    public function cadastrar($dados)
    {
        $this->sql = "insert into $this->tabela(nome, email, senha) values (:nome, :email, :senha)";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindValue(':nome', $dados->getNome());
        $this->resultado->bindValue(':email', $dados->getEmail());
        $this->resultado->bindValue(':senha', $dados->getSenha());

        $this->resultado->execute();
    }

    public function login($email, $senha)
    {
        $this->sql = "select * from $this->tabela where email = :email and senha = :senha";

        $this->resultado = $this->conexao->prepare($this->sql);
        $this->resultado->bindValue(':email', $email);
        $this->resultado->bindValue(':senha', $senha);

        $this->resultado->execute();
        return $this->resultado->fetch();
    }
}
?>