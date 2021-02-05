<?php
session_start();
?>

<div class="msg">
<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
}else{
    echo "plz enter login cerdintial";
}
session_destroy();
?>
</div>


<form action="validate.php" method="post">


<table>
<label for="name">name</label>
</th>
</tr>
<tr><th><input type="text" name="name" id=""></th></tr>

<tr>
<th>
<label for="Email">Email</label>
</th>
</tr>
<tr><th><input type="text" name="email" id=""></th></tr>
<tr>
<th>



<tr><th><label for="pwd">Password</label></th></tr>
<tr><th><input type="password" name="pwd" id=""></th></tr>

<tr><th><label for="phonenumber">PhoneNumber</label></th></tr>
<tr><th><input type="text" name="number" id=""></th></tr>
<tr><th><input type="submit" name="submit" id=""></th></tr>

</table>

</form>