<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'vendor/autoload.php';
require_once 'database.php';
require_once 'functions.php';


// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

$obj= new index();


for ($i = 0; $i < 1000; $i++) {
	$data[$i]['FirstName'] = $faker->firstName;
	$data[$i]['LastName'] = $faker->lastName;
	$data[$i]['EmailAddress'] = $faker->email;
	$data[$i]['Phone'] = $faker->phoneNumber;
	
}

$res = $obj->insertDataUser($data);

$data = [];
for ($i = 0; $i < 1000; $i++) {
	$data[$i]['ProductName'] = $faker->company;
	$data[$i]['ProductPrice'] = $faker->randomNumber(2);
	$data[$i]['DateOfCreation'] = $faker->date($format = 'Y-m-d', $max = 'now');
	$data[$i]['ProductQuantity'] = $faker->randomDigit;
	$data[$i]['Suppliers'] = $faker->name;
	$data[$i]['ProductCategory'] = $faker->companySuffix;
	
}

$res = $obj->insertDataProduct($data);


$users = $obj->getUsers();
$products = $obj->getProducts();




$data = [];
$productArray = $products;
for ($i = 0; $i < 1000; $i++) {
	//$productID = array_rand($productArray,1);
	$data[$i]['ProductQuantity'] = $faker->randomDigit;
	$data[$i]['ProductId'] = $products[$productID]['ProductId'];
	$data[$i]['UserID'] = $users[array_rand($users,1)]['UserId'];
	$data[$i]['ProductPrice'] = $faker->randomDigit;
	$data[$i]['TotalPrice'] = $data[$i]['ProductPrice'] * $data[$i]['ProductQuantity'];
	//unset($productArray[$productID]);
	
}

$res =$obj->insertDataCart($data);

$data = [];
for ($i = 0; $i < 1000; $i++) {
	$data[$i]['UserId'] = $users[array_rand($users,1)]['UserId'];
	$data[$i]['ProductId'] =  $products[array_rand($products,1)]['ProductId'];
	$data[$i]['TotalPrice'] = $products[array_rand($products,1)]['ProductPrice'];
	
}

$res =$obj->insertDataCommand($data);


$data = [];
for ($i = 0; $i < 1000; $i++) {
	$data[$i]['UserId'] = $users[array_rand($users,1)]['UserId'];
	$data[$i]['CommandList'] =  $faker->word;
	$data[$i]['FirstName'] = $faker->firstName;
	$data[$i]['LastName'] = $faker->lastName;
	$data[$i]['EmailAddress'] = $faker->email;
	$data[$i]['TotalPrice'] = $faker->randomNumber(2);
	
}

$res =$obj->insertDataInvoice($data);

$data = [];

for ($i = 0; $i < 1000; $i++) {
	$data[$i]['UserId'] = $users[array_rand($users,1)]['UserId'];
	$data[$i]['Cheque'] =  $faker->word(12);
	$data[$i]['IBAN'] = $faker->word(12);
	$data[$i]['CardNumber'] = rand(1000000000000000, 9999999999999999);
	
}

$res =$obj->insertDataPayment($data);


$data = [];

for ($i = 0; $i < 1000; $i++) {
	$data[$i]['ProductId'] = $products[array_rand($products,1)]['ProductId'];
	$data[$i]['PhotoUrl'] =  $faker->imageUrl();
	
	
}

$res =$obj->insertDataProductPhoto($data);


$data = [];
$productArray = $products;
for ($i = 0; $i < 1000; $i++) {
	$productID = array_rand($productArray,1);
	$data[$i]['ProductId'] = $products[$productID]['ProductId'];
	$data[$i]['ProductRate'] =  $faker->randomDigit(1);
	unset($productArray[$productID]);
}

$res =$obj->insertDataProductRate($data);


$data = [];
for ($i = 0; $i < 1000; $i++) {
	
	$data[$i]['Address'] = $faker->address;
	$data[$i]['City'] =  $faker->city;
	$data[$i]['Country'] =  $faker->country;
	$data[$i]['PostalCode'] =  $faker->postcode(6);
}

$res =$obj->insertDataUserAddress($data);



$data = [];
for ($i = 0; $i < 1000; $i++) {
	$data[$i]['UserId'] = $users[array_rand($users,1)]['UserId'];
	$data[$i]['PhotoId'] =  $faker->imageUrl();
}

$res =$obj->insertDataUserPhoto($data);

?>
