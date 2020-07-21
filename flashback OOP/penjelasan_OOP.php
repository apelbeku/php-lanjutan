<?php 

	class Logger
	{
		
		public function log($message)
		{
			echo $message;
		}
	}

	class Util
	{
		
		private $logger;

		public function setLogger($logger)
		{
			$this->logger = $logger;
		}

		public function log($message)
		{
			$this->logger->log($message);
		}
	}

	$Util = new Util();
	$Util->setLogger(new Logger());
	$Util->log('Logging');
	echo PHP_EOL;

	$Util->setLogger(new Class {
		public function log($message)
		{
			echo $message;
		}
	});
	$Util->log('Logging Anonymous');
	echo PHP_EOL;

	/*
		Line 3 - 10

		Terdapat class dengan nama Logger yang didalamnya terdapat methode log dengan argument $message
		dan methode tersebut mengecho $message yang merupakan argument dari methode tersebut

		Line 12 - 26

		Terdapat class dengan nama util yang didalamnya terdapat properti $logger dengan akses modifier
		private dan terdapat methode setLogger dengan argument $logger dan didalm methode tersebut terdapat
		$this-> yang berarti merujuk kepada class itu sendiri dan logger adalah properti dari class itu
		dan $logger adalah nilai dari propertinya kemudian ada methode log dengan argument $message dan
		didalamnya terdapat $this->logger->log($message); dimana kita mengakses properti logger yang terdapat
		pada class itu sendiri yang nilai dari properti logger adalah methode log dengan argument $message

		Line 28

		Terdapat $Util dengan nilai semua class Util

		Line 29

		Terdapat $Util yang mengakses methode setLogger dengan argument new Logger

		Line 30

		Terdapat $Util yang mengakses methode log dengan argument Logging yang dimana methode log mengakses
		properti logger diclass Util dan nilai dr propertinya adalah class Logger dan class Logger terlah dijelaskan
		di Line 43

		Line 33

		Terdapat $Util yang mengakses methode setLogger diclass tersebut dengan argument new class dimana new class
		adalah anonymous class dan didalam new class terdapa methode log dengan argument $message yang langsung di echo

		Line 34

		Terdapat $Util yang mengakses methode log dimana log mengakses properti logger diclass tersebut yang nilai
		dari propertinya adalah anonymous class dengan methode log dengan argument $message dan methode tersebut mengecho
		argumentnya
	*/


 ?>