<?php

	class Database
	{
		public $dbteststring="asdf test";
		private $dbuser;
		private $dbpassword;
		private $dbname;
		private $dbhost;

		function __construct( $dbuser, $dbpassword, $dbname, $dbhost ) 
		{
			$this->dbuser=$dbuser;
			$this->dbpassword=$dbpassword;
			$this->dbname=$dbname;
			$this->dbhost=$dbhost;
			$this->ConnectToDatabase();
		}

		public function ConnectToDatabase()
		{
			if(! mysql_connect($this->dbhost, $this->dbuser, $this->dbpassword))
			{
				echo "<h2>Database Connection ERROR</h2>";
				die();
			}
			mysql_select_db($this->dbname);
			mysql_query("SET NAMES utf8");
		}

		public function QuerySelect($query)
		{
			$result=mysql_query($query);
			if (!$result) 
			{
				die('Dao! Felmeddelande: ' . mysql_error() . "<br>");
			}
			return $result;
		}

	}

	if ( !isset( $databaseConnection ) ) 
	{
		$databaseConnection = new Database( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST );
	}

?>
