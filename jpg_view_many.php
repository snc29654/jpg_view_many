<?php
$gazoudir = opendir("./jpg");
while (false !== ($file[] = readdir($gazoudir)));
closedir($gazoudir);
sort($file);
reset($file);
while (false !== ($gazou = each($file))){
    if ((preg_match ("|.jpg$|", $gazou[1]))||(preg_match ("|.JPG$|", $gazou[1]))) {
        print "<table  border='1'><br>";
        print "<tr><br>";
        print "<td><img src='./jpg/" . $gazou[1] . "' width='400px' height='400px'></td><br>";
        print "</tr><br>";
        print "<tr><br>";
        print "<td align='center'>" . $gazou[1] . "</td><br>";
        print "</tr><br>";
        print "</table><br>";
        print "</div><br>";
    }
}
?>