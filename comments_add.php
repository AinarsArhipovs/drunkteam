<?php

	function setComment($dbc){
		if (isset($_POST['submit'])) {
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];

			$sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
			$result = $dbc->query($sql);
		}
	}

	function getComments($dbc){
		$sql = "SELECT * FROM comments";
		$result = $dbc->query($sql);
		while($row = $result->fetch_assoc()){
			$id = $row['uid'];
			$sqlUser = "SELECT * FROM users WHERE user_id='$id'";
			$resultUser = $dbc->query($sqlUser);
			if ($rowUser = $resultUser->fetch_assoc()) {
				echo "<div class='komentars jumbotron' style='padding: 10px;'>";
				echo $rowUser['first_name'].' '.$rowUser['last_name']."</br>";
				echo $row['date']."</br>";
				echo nl2br($row['message'])."</br>";
				if (isset($_SESSION['user_id'])) {
					if ($_SESSION['user_id'] == $rowUser['user_id']) {
									echo "
			<form method='POST' action='editcomments.php'>
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<input type='hidden' name='uid' value='".$row['uid']."'>
				<input type='hidden' name='date' value='".$row['date']."'>
				<input type='hidden' name='message' value='".$row['message']."'>
				<button>Edit</button>
				<form method='POST' action='".deleteComments($dbc)."'>
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<button name='delete'>Delete</button>
			</form>
			</form>";
					}
				}
			echo "</div>";
			}
		}
	}

	function editComment($dbc){
		if (isset($_POST['submit'])) {
			$cid = $_POST['cid'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];

			$sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
			$result = $dbc->query($sql);
			header("Location: home.php");
		}
	}

	function deleteComments($dbc){
		if (isset($_POST['delete'])) {
			$cid = $_POST['cid'];

			$sql = "DELETE FROM comments WHERE cid='$cid'";
			$result = $dbc->query($sql);
			header("Location: home.php");
		}
	}
?>