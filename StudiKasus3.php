<?php

interface Greeting
{
	public function greet();
}

class English implements Greeting
{
	public function greet()
	{
		return 'Hello!';
	}
}

class German implements Greeting
{
	public function greet()
	{
		return 'Hallo!';
	}
}

class French implements Greeting
{
	public function greet()
	{
		return 'Bonjour!';
	}
}

class Hawaii implements Greeting
{
	public function greet()
	{
		return 'Aloha!';
	}
}

class Spanyol implements Greeting
{
	public function greet()
	{
		return 'Hola!';
	}
}

$English = new English();
$German = new German();
$French = new French();
$Hawaii = new Hawaii();
$Spanyol = new Spanyol();

echo "\n";
echo "Pengucapan Salam di Berbagai Negara";
echo "\n\n";
echo "Dalam Bahasa Inggris \t: ".$English->greet();
echo "\n";
echo "Dalam Bahasa Jerman \t: ".$German->greet();
echo "\n";
echo "Dalam Bahasa Perancis \t: ".$French->greet();
echo "\n";
echo "Dalam Bahasa Hawaii \t: ".$Hawaii->greet();
echo "\n";
echo "Dalam Bahasa Spanyol \t: ".$Spanyol->greet();
echo "\n";

?>
