<? 
	class Db {
		
		private $mysql;
		
		function __construct() {
			$this->mysql = new mysqli('localhost', 'root', 'password', 'PhoneBook') 
			or die('problem with connection with your data base');
		}
		
		function getContacts() {
			$query = "SELECT * FROM contacts ORDER BY id DESC"; 
			$answer = $this->mysql->query($query); 
			$answer = $answer->fetch_all(MYSQLI_ASSOC);
			return json_encode($answer);
		}
		
		function addContact($name, $phoneNumber) {
			$query = "INSERT INTO contacts(NAME, PHONE_NUMBER) VALUES(?, ?)";
			if($stmt = $this->mysql->prepare($query)) { 
				$stmt->bind_param('ss', $_POST['name'], $_POST['phoneNumber']); 
				$stmt->execute();
			} else die($this->mysql->error); 
		}
		
		function deleteContact($id) {
			$query = "DELETE from contacts WHERE ID = ?";
			if($stmt = $this->mysql->prepare($query)) { 
				$stmt->bind_param('i', $id); 
				$stmt->execute();
			} else die($this->mysql->error);
		}
}