<?php 


class Container 
{
	
	function getProduct()
	{
		return new Product(self::getConn());
	}

	function getConn()
	{
		return new Conn("mysql:host=localhost;dbname=avancando-oo","root","");
	}
}