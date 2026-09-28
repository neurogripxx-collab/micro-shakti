<?php
// NGO নাম না লিখলে Branch আসবে না
if(!empty($_POST['ngo_name'])){
 $ngo = $_POST['ngo_name'];
 echo "<h1>$ngo</h1><a href='add_branch.php?ngo=$ngo'>Add Branch - আপনার অফিস কোথায়?</a>";
} else {
 echo '<form method="POST"><input name="ngo_name" placeholder="NGO Name লিখুন - Must" required><br><br><button>Next</button></form>';
}
?>
