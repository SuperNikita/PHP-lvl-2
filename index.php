<html>
<head>
	<meta charset="UTF-8">
	<title>Домашняя Работа № 1</title>
</head>
<body>
	<h1>Домашняя работа № 1</h1>
	<div class="phone">
		<p>Интернет Магазин:</p>
	</div>
		<?php

class product 
{
	public $id;
	public $name;
	public $price;

	public function __construct($id, $name, $price)
	{
		$this->id=$id;
		$this->name=$name;
		$this->price=$price;
	}
	public function view()
	{
		echo "<h2>$this->name</h2><p>$this->price</p>";
	}

 public function foo() {
 static $id = 0;
echo ++$id;
 }






}

class pan extends product
{

}

class phone extends product
{

}

class paper extends product
{

}

//Классы будут отличаться идентичностью



// class A {
// public function foo() {
// static $x = 0;
// echo ++$x;
// }
// }
// $a1 = new A(); //создается объект $a1
// $a2 = new A(); //создается объект $a2
// $a1->foo(); // выводит 1
// $a2->foo(); // выводит 2
// $a1->foo(); // выводит 3
// $a2->foo(); // выводит 4
// //Потому что статическое свойство $x принадлежит классу А.

// class A {
// public function foo() {
// static $x = 0;
// echo ++$x;
// }
// }
// class B extends A {
// } 						//создается наследник В класса А
// $a1 = new A(); // создается объект класса А
// $b1 = new B(); // создается объект класса В
// $a1->foo();  // метод объекта $a1 класса А выводит 1
// $b1->foo();  // метод объекта $b1 класса B(наследника А) выводит 1
// $a1->foo();  // метод объекта $a1 класса А выводит 2
// $b1->foo();  // метод объекта $b1 класса B(наследника А) выводит 2
// // В этом случае метод класса А наследуется классом В который не изменяется пока этот же метод не используется повторно тк клас В не имеет дополнительных действий.


// class A {
// public function foo() {
// static $x = 0;
// echo ++$x;
// }
// }
// class B extends A {
// }
// $a1 = new A;
// $b1 = new B;
// $a1->foo(); 
// $b1->foo(); 
// $a1->foo(); 
// $b1->foo(); 

//этот код выведет тоже что и в преведущем примере, потому что скобки обязательно нужны только тогда когда используется конструктор класса.


		?>









</body>
</html>