<?php
// NGO নিজে যে Branch লিখবে - এখানে Save হবে
$ngo = $_GET['ngo'] ?? "Unknown NGO";
$branch = $_POST['branch_name'] ?? "";
$address = $_POST['branch_address'] ?? "";
$officer = $_POST['officer_name'] ?? "";

if($branch){
  echo "<h1>Done! $ngo এর Branch Save হইছে!</h1>";
  echo "<p>Branch: $branch<br>Address: $address<br>Officer: $officer</p>";
  echo "<a href='index.php'>Back to Home</a>";
  // এখানে Database এ Save করার কোড পরে যোগ করবো
} else {
  echo "Branch Name লিখুন!";
}
?>
