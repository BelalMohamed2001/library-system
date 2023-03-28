<?php

include_once "db.php";

if(isset($_REQUEST["books"])){
	$bookId = $_REQUEST["bookId"];
	$sql = "SELECT * from books where id = $bookId";
	$userInfoDS = $conn->query($sql);
	$userInfoobj = $userInfoDS->fetch_assoc();
}
else{

}

?>




<form action=addbookdb.php method="POST">
	bookname <input type=text name="bookName" value="<?php echo @$userInfoobj["bookName"] ?>"> <br>
	categoryid <input type=text name="categoryid" value="<?php echo @$userInfoobj["Categoryed"] ?>"> <br>
	quantity <input type=text name="quantity" value="<?php echo @$userInfoobj["quantity"] ?>"> <br>
	fees <input type=txt name="fees" value="<?php echo @$userInfoobj["fees"] ?>"> <br>
	 <br>
	<input type="hidden" name="bookId" value="<?php echo @$bookId; ?>">
	<input type="submit">
</form>



