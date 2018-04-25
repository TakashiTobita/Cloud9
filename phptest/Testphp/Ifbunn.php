<?php
// $str="曜日でわかるPHP";
// $array_week=array("日","月","火","水","木","金","土");
// $donichi="";
// for($i=6; $i>=0;$i--) {
//     if ($array_week[$i]=="土") {
//             $donichi= $array_week[$i];
//     }elseif ($array_week[$i]=="日") {
//             $donichi=$donichi.$array_week[$i];
//     }else{
//             print $array_week[$i].$str;
//             print "<br>";
            
//     }
// }
// print $donichi."でわかるPHP";

// カレンダーの出力
class Print_Calendar extends Today_Calendar {
    function space_cell($count){
        if ($count != 0) {
            for($i=0;$i<$count;$i++) {
                print "<td></td>";
            }
        }
    }
}
class Today_Calendar {
    function today($day){
        if (date("Y/m/d")==date("Y/m/d",mktime(0,0,0,date("n"),$day,date("Y")))){
            return "<b>".$day."</b>";
        }else{
            return $day;
        }
    }
}
print "<h1>".date("F")."</h1>";
print "Today:".date("Y/m/d");
print "<br>";
$array_week=array("Sun","Mon","Tue","Web","Thu","Fri","Sat");
print "<table border=1><tr>";
foreach($array_week as $value){
    print "<th>".$value."</th>";
}
print "</tr><tr>";
for($i=0;$i<date("t");$i++) {
    $week_number = date("w", mktime(0, 0, 0, date("n"), $i+1, date("Y")));
  if ($i==0) {
      print "<tr>";
      Print_Calendar::space_cell($week_number);
    }elseif ($week_number == 0){
      print "<tr>";
    }
    //   print "<td>".($i+1)."</td>";
      print "<td>".Print_Calendar:: today($i+1)."<?td>";
      if ($i+1==date("t")){
        Print_Calendar::space_cell(6-$week_number);
      print "</tr>";
    }elseif ($week_number == 6) {
      print "</tr>";
    }
}
print "</table>";

?>