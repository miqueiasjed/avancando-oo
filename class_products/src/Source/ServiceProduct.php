<?php


namespace Source;


class ServiceProduct implements IServiceProduct
{

    private $db;
    private $products;

    public function __construct(IConn $db, IProduct $products)
    {
        $this->db = $db->connect();
        $this->products = $products;

    }


    public function listar()
    {
        $query = "select * from products";

        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchALL(\PDO::FETCH_ASSOC);
    }

    public function save()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}