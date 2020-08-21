<?php
class User_CRUD{
		public $User;
		public $Password;
		public $DB_Connection;

		public function __construct($DB_Connection, $User, $Password)
		{
				$this->DB_Connection = $DB_Connection;
				$this->User = $User;
				$this->Password = $Password;
		}

		public function SafeString_User()
		{
				return mysqli_real_escape_string($this->DB_Connection, $this->User);
		}

		public function SafeString_Password()
		{
				return mysqli_real_escape_string($this->DB_Connection, $this->Password);
		}

		public function Select_ID_User()
		{
				$user = $this->SafeString_User();
				$query = "SELECT ID FROM users WHERE USER = '$user'";
				$result = mysqli_query($this->DB_Connection, $query);
				$row = $result->fetch_row();
				return $row[0];
				mysqli_close($this->DB_Connection);
		}

		public function Insert_User()
		{
				$user = $this->SafeString_User();
				$password = $this->SafeString_Password();
				$cryptography = md5($password);
				$stmt = $this->DB_Connection->prepare("INSERT INTO users (USER, PASSWORD) VALUES(?, ?)");
				$stmt->bind_param('ss', $user, $cryptography);
				$stmt->execute();
				mysqli_close($this->DB_Connection);
		}

		public function Select_Users()
		{
				$query = "SELECT USER FROM users";
				$result  = $this->DB_Connection->query($query);
				$allRows = $result->fetch_all();
				return $allRows;
				mysqli_close($this->DB_Connection);
		}

		public function Update_User($old_user_name)
		{
				$user = $this->SafeString_User();
				$password = $this->SafeString_Password();
				$cryptography = md5($password);
				$query = "UPDATE users SET USER='$user', PASSWORD='$cryptography' WHERE USER='$old_user_name'";
				mysqli_query($this->DB_Connection, $query);
				mysqli_close($this->DB_Connection);
		}

		public function Delete_User()
		{
				$user = $this->SafeString_User();
				$password = $this->SafeString_Password();
				$ID_USER = $this->Select_ID_User();
				$query = "DELETE FROM tasks WHERE ID_USERS = '$ID_USER'";
				mysqli_query($this->DB_Connection, $query);
				$query = "DELETE FROM users WHERE USER = '$user' and PASSWORD = md5('$password')";
				mysqli_query($this->DB_Connection, $query);
				mysqli_close($this->DB_Connection);
		}
}

class User_Authentication extends User_CRUD{
		public $User;
		public $Password;
		public $DB_Connection;

		public function __construct($DB_Connection, $User, $Password)
		{
				$this->DB_Connection = $DB_Connection;
				$this->User = $User;
				$this->Password = $Password;
		}

		public function Login_User()
		{
				$query = "SELECT ID, USER FROM users WHERE USER = '{$this->User}' and PASSWORD = md5('{$this->Password}')";
				$result = mysqli_query($this->DB_Connection, $query);
				$row = mysqli_num_rows($result);

				if($row == 1)
				{
					return true;
				}
				else
				{
					return false;
				}
				mysqli_close($this->DB_Connection);
		}

		public function Logout_User()
		{
				session_start();
				session_destroy();
		}
}

class Tasks_CRUD extends User_CRUD{
		public $Task;
		public $Task_Status;
		public $DB_Connection;

		public function __construct($DB_Connection, $Task, $Task_Status)
		{
				$this->Task = $Task;
				$this->Task_Status = $Task_Status;
				$this->DB_Connection = $DB_Connection;
		}

		public function SafeString_Task()
		{
				return mysqli_real_escape_string($this->DB_Connection, $this->Task);
		}

		public function SafeString_TaskStatus()
		{
				return mysqli_real_escape_string($this->DB_Connection, $this->Task_Status);
		}

		public function Insert_Task($ID_USER)
		{
				$task = $this->SafeString_Task();
				$task_status = $this->SafeString_TaskStatus();
				$stmt = $this->DB_Connection->prepare("INSERT INTO tasks (ID_USERS, TASK, STATUS) VALUES(?, ?, ?)");
				$stmt->bind_param('iss', $ID_USER, $task, $task_status);
				$stmt->execute();
				mysqli_close($this->DB_Connection);
		}

		public function Select_Tasks($ID_USER)
		{
				$query = "SELECT TASK, STATUS FROM tasks WHERE ID_USERS='$ID_USER'";
				$result  = $this->DB_Connection->query($query);
				$allRows = $result->fetch_all();
				return $allRows;
				mysqli_close($this->DB_Connection);
		}

		public function Update_Task($New_Task)
		{
				$task = $this->SafeString_Task();
				$task_status = $this->SafeString_TaskStatus();
				$query = "UPDATE tasks SET TASK='$New_Task', STATUS='$task_status' WHERE TASK='$task'";
				mysqli_query($this->DB_Connection, $query);
				mysqli_close($this->DB_Connection);
		}

		public function Delete_Task($ID_USER)
		{
				$task = $this->SafeString_Task();
				$query = "DELETE FROM tasks WHERE TASK = '$task' AND ID_USERS = '$ID_USER'";
				mysqli_query($this->DB_Connection, $query);
				mysqli_close($this->DB_Connection);
		}
}
