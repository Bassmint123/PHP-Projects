<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Checkboxes with File Reader and Table</title>
</head>

<body>
<!-- Setup the checkboxes -->
<p>Would you like to read a file?</p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<p><label for="user_filename">Type the name of your file here:</label>
<input type="text" id="user_filename" name="user_filename" /></p>

<?php 
if($_POST['user_filename']){
    $message = "<b>".$_POST['user_filename']."</b> is the name of your file"; // Make the file name bold
    echo $message."<br><br>";
}
else{
    echo "<font color='red'>No file selected</font><br><br>";
}
?> 

<input type="checkbox" name="Yes_Answer" value="Yes">
       <label for="Yes_Answer">Yes</label>
<input type="checkbox" name="No_Answer" value="No">
       <label for="No_Answer">No</label>
<br>
<button type="submit" name="submit" value="submit">Submit Answer</button>
</form>


<?php
//-----------------------------
// Read status of checkboxes
//-----------------------------
if(isset($_POST['Yes_Answer']) && isset($_POST['No_Answer'])){
  echo "You selected Both.";
}
elseif(isset($_POST['Yes_Answer']) == 'Yes'){
  echo "You selected Yes.";
    ?>
    <table border="1" width="50%">
    <?php
    //-----------------------------
    // Read some lines from the file
    //-----------------------------
    $filename = "test.txt";
    $fp = fopen($filename, "r") or die("Couldn't open $filename");
    while (!feof($fp)) {
        $line = fgets($fp, 1024);
        echo "<tr><td>".$line."</td></tr>";
    }
    ?>	     	   		 	 
    </table>
    <?php  
}
elseif(isset($_POST['No_Answer']) == 'No'){
   echo "You selected No.";
}
else {
   echo "<font color='red'>Please select an answer.</font>";
}
?>		  
 
</body>

</html>

