<html>
<h1>Comments</h1>
</html>

<?php
@mysql_select_db("project", mysql_connect("localhost","root",""));

$find_data = mysql_query("SELECT * FROM comments");
while($row = @mysql_fetch_assoc($find_data)) {
	$code = $row['code'];
	$username = $row['username'];
	$comment = $row['comment'];
	echo "$comment - $username<p>";
}
?>

<html>
<form action="post_comment.php" method="POST">
	  <input type="text" name="username" value="User Name"><br> 
	<textarea name="comment" cols="50" rows="2">Enter a comment</textarea>
	<input type="submit" value="Comment">

</form>
</html>