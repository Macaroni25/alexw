   
<?php 
 if(isset($_POST['submit'])) { 
 foo(); 
 } 
 ?> 
 
 <form action="<?=$_SERVER['PHP_SELF'];?>" method="post"> 
 <input type="submit" name="submit" value="Click Me"> 
 </form> 


