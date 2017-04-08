<?php 
	require_once("config.php");

	class MySQLDatabase{
		private $connection;
		//opening a connection

		function __construct(){
			$this->open_connection();
		}

		public function open_connection(){
			$this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
			if(!$this->connection){
				die("Database connection failed: ".mysql_error());
			}
			else{
				$dbselect = mysql_select_db(DB_NAME, $this->connection);
				if(!$dbselect){
					die("Database selection failed: ".mysql_error());
				}
			}
		}

		public function close_connection(){
			if(isset($connection)){
				mysql_close($connection);
				unset($connection);
			}
		}

		public function query($sql){
			$result = mysql_query($sql, $this->connection);
			if(!$result){
				die("Database query failed: ".mysql_error());
				return $result;
			}
		}

		public function mysql_prep($value){
			$magic_quotes_active = get_magic_quotes_gpc();
			$new_enough_php = function_exists("mysql_real_escape_string");
			if($new_enough_php){
				if(!$magic_quotes_active) {$value = addslashes($value);}
			}
			return $value;
		}
	}

	$database = new MySQLDatabase();

 ?>