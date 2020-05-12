<!DOCTYPE html>
<html>
<body>

<?php
$file = array_map('str_getcsv', file('zip_codes.csv'));

$state = $_REQUEST["state"];
$city = $_REQUEST["city"];

$state = strtoupper($state);
$city = ucwords(strtolower($city));

$zipcode = "";

if ($state !== "") {
  foreach($file as $zip) {
    if ($zip[1] == $state && $zip[2] == $city) {
      if ($zipcode === "") {
        $zipcode = $zip[0];
      } else {
        $zipcode .= ", $zip[0]";
      }
    }
  }
}

echo $zipcode === "" ? "no suggestion" : $zipcode;

?>

</body>
</html>