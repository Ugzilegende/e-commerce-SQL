<?php
class index extends database
{
	public function getUsers()
	{
		$sql = ' SELECT UserId FROM users ';
		return $this->callQuery($sql);
	}	
	
	public function getProducts()
	{
		$sql = ' SELECT ProductId, ProductPrice FROM products ';
		return $this->callQuery($sql);
	}	
	
	
	public function insertDatauser($data)
	{
		$sql = 'INSERT INTO users (FirstName, LastName, EmailAddress, Phone) VALUES ';
	
    		$count = 0;
		foreach($data AS $each)
		{
			if($count != 0)
			{	
				$sql.= ',';
			}
			$sql.= '(?,?,?,?)';
			$dataInsert[] = $each['FirstName'];
			$dataInsert[] = $each['LastName'];
			$dataInsert[] = $each['EmailAddress'];
			$dataInsert[] = $each['Phone'];
			
			
			$count++;
		}
		
		
		return $this->callQueryInsert($sql,$dataInsert);
	}
	
	public function insertDataProduct($data)
	{
		$sql = 'INSERT INTO products (ProductName, ProductPrice, DateOfCreation, ProductQuantity, Suppliers, ProductCategory) VALUES ';
	
    		$count = 0;
		foreach($data AS $each)
		{
			if($count != 0)
			{	
				$sql.= ',';
			}
			$sql.= '(?,?,?,?,?,?)';
			$dataInsert[] = $each['ProductName'];
			$dataInsert[] = $each['ProductPrice'];
			$dataInsert[] = $each['DateOfCreation'];
			$dataInsert[] = $each['ProductQuantity'];
			$dataInsert[] = $each['Suppliers'];
			$dataInsert[] = $each['ProductCategory'];
			
			
			$count++;
		}
		
		
		return $this->callQueryInsert($sql,$dataInsert);
	}
	
	public function insertDataCart($data)
	{
		$sql = 'INSERT INTO cart (ProductQuantity, ProductId, UserID, ProductPrice, TotalPrice) VALUES ';
	
    		$count = 0;
		foreach($data AS $each)
		{
			if($count != 0)
			{	
				$sql.= ',';
			}
			$sql.= '(?,?,?,?,?)';
			$dataInsert[] = $each['ProductQuantity'];
			$dataInsert[] = $each['ProductId'];
			$dataInsert[] = $each['UserID'];
			$dataInsert[] = $each['ProductPrice'];
			$dataInsert[] = $each['TotalPrice'];
			
			$count++;
		}
		
		
		return $this->callQueryInsert($sql,$dataInsert);
	}
	
	
	public function insertDataCommand($data)
	{
		$sql = 'INSERT INTO command (UserId, ProductId, TotalPrice) VALUES ';
	
    		$count = 0;
		foreach($data AS $each)
		{
			if($count != 0)
			{	
				$sql.= ',';
			}
			$sql.= '(?,?,?)';
			$dataInsert[] = $each['UserId'];
			$dataInsert[] = $each['ProductId'];
			$dataInsert[] = $each['TotalPrice'];
			
			$count++;
		}
		
		
		return $this->callQueryInsert($sql,$dataInsert);
	}
	
	public function insertDataInvoice($data)
	{
		$sql = 'INSERT INTO invoices (UserId, CommandList, FirstName, LastName, EmailAddress, TotalPrice) VALUES ';
	
    		$count = 0;
		foreach($data AS $each)
		{
			if($count != 0)
			{	
				$sql.= ',';
			}
			$sql.= '(?,?,?,?,?,?)';
			$dataInsert[] = $each['UserId'];
			$dataInsert[] = $each['CommandList'];
			$dataInsert[] = $each['FirstName'];
			$dataInsert[] = $each['LastName'];
			$dataInsert[] = $each['EmailAddress'];
			$dataInsert[] = $each['TotalPrice'];
			
			$count++;
		}
		
		
		return $this->callQueryInsert($sql,$dataInsert);
	}
	
	
	public function insertDataPayment($data)
	{
		$sql = 'INSERT INTO payment (UserId, Cheque, IBAN, CardNumber) VALUES ';
	
    		$count = 0;
		foreach($data AS $each)
		{
			if($count != 0)
			{	
				$sql.= ',';
			}
			$sql.= '(?,?,?,?)';
			$dataInsert[] = $each['UserId'];
			$dataInsert[] = $each['Cheque'];
			$dataInsert[] = $each['IBAN'];
			$dataInsert[] = $each['CardNumber'];
			
			$count++;
		}
		
		return $this->callQueryInsert($sql,$dataInsert);
	}
	
	
	public function insertDataProductPhoto($data)
	{
		$sql = 'INSERT INTO product_photo (ProductId, PhotoUrl) VALUES ';
	
    		$count = 0;
		foreach($data AS $each)
		{
			if($count != 0)
			{	
				$sql.= ',';
			}
			$sql.= '(?,?)';
			$dataInsert[] = $each['ProductId'];
			$dataInsert[] = $each['PhotoUrl'];
			
			$count++;
		}
		
		return $this->callQueryInsert($sql,$dataInsert);
	}
	
	
	public function insertDataProductRate($data)
	{
		$sql = 'INSERT INTO product_rating (ProductId, ProductRate) VALUES ';
	
    		$count = 0;
		foreach($data AS $each)
		{
			if($count != 0)
			{	
				$sql.= ',';
			}
			$sql.= '(?,?)';
			$dataInsert[] = $each['ProductId'];
			$dataInsert[] = $each['ProductRate'];
			
			$count++;
		}
		
		return $this->callQueryInsert($sql,$dataInsert);
	}
	
	public function insertDataUserAddress($data)
	{
		$sql = 'INSERT INTO user_address (Address, City, Country, PostalCode) VALUES ';
	
    		$count = 0;
		foreach($data AS $each)
		{
			if($count != 0)
			{	
				$sql.= ',';
			}
			$sql.= '(?,?,?,?)';
			$dataInsert[] = $each['Address'];
			$dataInsert[] = $each['City'];
			$dataInsert[] = $each['Country'];
			$dataInsert[] = $each['PostalCode'];
			
			$count++;
		}
		
		return $this->callQueryInsert($sql,$dataInsert);
	}
	
	
	public function insertDataUserPhoto($data)
	{
		$sql = 'INSERT INTO user_photo (UserId, PhotoId) VALUES ';
	
    		$count = 0;
		foreach($data AS $each)
		{
			if($count != 0)
			{	
				$sql.= ',';
			}
			$sql.= '(?,?)';
			$dataInsert[] = $each['UserId'];
			$dataInsert[] = $each['PhotoId'];
			
			$count++;
		}
		
		return $this->callQueryInsert($sql,$dataInsert);
	}	
}



