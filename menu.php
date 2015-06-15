<?php
require_once 'db.php';
class MenuCreate {
	public function createMainMenu($arrayMenu) {
		if (! is_array ( $arrayMenu ) || ! count ( $arrayMenu )) {
			return;
		}
		echo '<ul class="nav navbar-nav">';
		foreach ( $arrayMenu as $key => $value ) {
			echo '<li>' . "<a href='category.php?id={$key}'> ";
			echo $value;
			echo '</a></li>';
		}
		echo '</ul>';
	}
	public function getAllCategories() {
		$connCategoriesMenu = new ConnectToDB ();
		$sql = "SELECT id, name FROM  category";
		$result1 = array ();
		$result = $connCategoriesMenu->sqlQuery ( $sql );
		
		while ( $row = mysqli_fetch_array ( $result ) ) {
			$result1 [$row ['id']] = $row ["name"];
		}
		return $result1;
	}
	public function getSinglePosts() {
		$connSinglePosts = new ConnectToDB ();
		if (! isset ( $_GET ) || ! isset ( $_GET ['id'] )) {
			exit ( 'Wrong category id' );
		}
		$id = $_GET ['id'];
		if (! is_numeric ( $id )) {
			exit ( 'Wrong category id' );
		}
		$sql = "SELECT * FROM post where id = '" . $_GET ['id'] . "'";
		$result = $connSinglePosts->sqlQuery ( $sql );
		while ( $row = mysqli_fetch_array ( $result ) ) {
			echo "<div>";
			echo " <h2>" . $row ['title'] . "</h2>";
			echo "<p>" . $row ['text'] . "</p>";
			echo "Author: " . $row ['name'] . "published: " . $row ['create_at'];
			echo "</div>";
		}
		return $result;
	}
	public function getLastPosts() {
		$connLastPosts = new ConnectToDB ();
		$sql = "SELECT id, title, description FROM post order by id DESC limit 5  ";
		$result = $connLastPosts->sqlQuery ( $sql );
		if ($rows = $result->num_rows > 0) {
			while ( $row = mysqli_fetch_array ( $result ) ) {
				echo "<div>";
				echo " <h2> <a href='post.php?id=" . $row ['id'] . "'>" . $row ['title'] . "</a> </h2>";
				echo "<p>" . $row ['description'] . "</p>";
				echo "</div>";
				echo "<br />";
			}
		}
	}
	public function getCategories() {
		$connCat = new ConnectToDB ();
		$sql = "SELECT id, title, description FROM post WHERE category_id=$_GET[id]";
		$result = $connCat->sqlQuery ( $sql );
		if (! $result)
			die ( $connection->error );
		while ( $row = mysqli_fetch_array ( $result ) ) {
			echo "<br />";
			echo " <h2> <a href='post.php?id=" . $row ['id'] . "'>" . $row ['title'] . "</a> </h2>";
			echo $row ['description'];
		}
	}
}