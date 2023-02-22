<?php
$stu_arr = array("Anna"=>"15", "Bivin"=>"17", "Kevin"=>"16", "Laura"=>"18", "Nora"=>"16");

print("Students associated array displayed with foreach loop");
echo "<br><br>";
foreach($stu_arr as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br><br>";
print("Students sorted with asort:");
asort($stu_arr);
print_r($stu_arr);
echo "<br><br>";
print("Students sorted with arsort:");
arsort($stu_arr);
print_r($stu_arr);
?>