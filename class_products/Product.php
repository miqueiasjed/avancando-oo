<?php 

class Product
{

	private $db;

	public function __construct(IConn $db)
	{
		$this->db = $db->connect(); 
	}

	public function list()
	{
		$query = "select * from products";

		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt->fetchALL(\PDO::FETCH_ASSOC); 

	}

}