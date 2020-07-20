<?php 
	/**
	 * 
	 */
	class Class1
	{
		public $salak;
		protected $jambu;

		function __construct($buah)
		{
			$this->salak = $buah;
		}

		function biji($biji)
		{
			$this->jambu = $biji;
		}

		function get_buah() {
			return $this->salak;
		}

		function get_biji()
		{
			return $this->jambu;
		}
	}

	/**
	 * 
	 */
	class Class2 extends Class1
	{
		public $kaos;
		private $celana;

		function __construct($vanila)
		{
			$this->kaos = $vanila;
		}

		function first($jual)
		{
			$this->celana = $jual;
		}

		function  jumlah()
		{
			return self::get_biji();
		}

		function get_kaos()
		{
			return $this->kaos;
		}

		function get_first()
		{
			return $this->celana;
		}
	}

	$fruits = new Class1("sawo");
	$fruits->biji(4);
	$jam = new Class2("sawo","oblong");
	$jam->first('jual');
	// $waktu->jumlah();

	echo $fruits->get_buah();
	echo "<br>";
	echo $fruits->get_biji();
	echo "<br>";
	echo $jam->get_kaos();
	echo "<br>";
	echo $jam->get_first();
	echo "<br>";
	echo $jam->jumlah();
 ?>