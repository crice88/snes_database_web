<?php
class SnesDB 
{
	private $pass = 'rice1988';
	private $user = 'crice';
	private $dbh;
	public $error;
	public $connected;

	public function __construct()
	{
		try {
			$this->dbh = new PDO('mysql:host=localhost;dbname=mysql', $this->user, $this->pass);
			$this->connected = true;
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
			$this->dbh = null;
			$this->connected = false;
		}
	}
	public function addDB($postArray)
	{
		try {
			$title = $_POST['title'];
			$box = $_POST['box'];
			$instructions = $_POST['instructions'];
			$shape = $_POST['shape'];
			$year = $_POST['year'];
			$num_of_copies = $_POST['num_of_copies'];
			
			$insert = "INSERT INTO snes_col_tbl ";
			$values = "VALUES ('$title', '$box', '$instructions', '$shape', '$year', '$num_of_copies');";
			
			$dbq = $insert . $values;
			$this->dbh->query($dbq);
			$this->dbh = null;
			return true;
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
			$this->dbh = null;
			return false;
		}
	}
	public function getDB()
	{
		try {
			$dbq = "Select * FROM snes_col_tbl;";
			$dbarray = $this->dbh->prepare($dbq);
			$dbarray->execute();
			$result = $dbarray->fetchall();
			$this->dbh = null;
			return $result;
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
			$this->dbh = null;
			return $this->error();
		}
	}
	public function search($postArray)
	{	
		try {
			$dbq = "SELECT ";
			foreach ($postArray as $post)
			{
				switch ($post) {
					case 'title':
						echo "<th>" . "Title" . "</th>";
						$dbq .= "title, ";
						break;
					case 'instructions':
						echo "<th>" . "Instructions" . "</th>";
						$dbq .= "instructions, ";
						break;
					case 'box':
						echo "<th>" . "Box" . "</th>";
						$dbq .= "box, ";
						break;
					case 'shape':
						echo "<th>" . "Shape" . "</th>";
						$dbq .= "shape, ";
						break;
					case 'num_of_copies':
						echo "<th>" . "Number of Copies" . "</th>";
						$dbq .= "num_of_copies, ";
						break;
					case 'year':
						echo "<th>" . "Year" . "</th>";
						$dbq .= "year, ";
						break;
				}
			}
			$dbq = substr($dbq, 0, (strlen($dbq) - 2));
			$dbq .= " FROM snes_col_tbl;";
			$dbarray = $this->dbh->prepare($dbq);
			$dbarray->execute();
			$result = $dbarray->fetchall();
			$this->dbh = null;
			return $result;
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
			return $this->error();
		}
	}

	public function titleSearch($title)
	{
		$title = $_POST['title'];
		$dbq = "SELECT title FROM snes_col_tbl WHERE title='$title';";
		$dbarray = $this->dbh->prepare($dbq);
		if ($dbarray)
		{
			$dbq = "SELECT * FROM snes_col_tbl WHERE title='$title';";
			$dbarray = $this->dbh->prepare($dbq);
			$dbarray->execute();
			$result = $dbarray->fetchall();
			$this->dbh = null;
			return $result;
		}
		else
		{
			return false;
		}
	}

	public function getError()
	{
		return $this->error();
	}
}
?>