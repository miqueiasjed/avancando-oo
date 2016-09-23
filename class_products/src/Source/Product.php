<?php
namespace Source;
class Product implements IProduct
{
    private $id;
    private $nome;
    private $desc;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }
    public function getDescricao()
    {
        return $this->desc;
    }
    public function setDescricao($desc)
    {
        $this->desc = $desc;
        return $this;
    }
}