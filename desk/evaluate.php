
<html>


<?php
  
  function getvisitors()
  {
    global $visitsarray, $visits, $visitors;
    $visitors=0; 
    sort($visitsarray);
    for ($i=0; $i<$visits-1; $i++)
    {
      if (getipfromline($i+1)!=getipfromline($i)) $visitors++;
    }
  
  }
  
  function spliceintoarrays()
  {
    global $ip, $time, $visits, $visitsarray;
    $ipstr="";
    $timestr="";
    for ($i=0; $i<$visits; $i++)
    {
      $ip_time=explode ("@",$visitsarray[$i]);
      $ipstr.="$ip_time[0]|";
      $timestr.="$ip_time[1]|";
      
    }
    $ipstr=substr($ipstr, 0, strlen($ipstr)-3);
   
    $ip=explode("|",$ipstr);
    $time=explode("|",$timestr);

  }
  
  function getipfromline($i)
  {
    global $ip;
    return $ip[$i];
  }


// main ()

  $visitsarray=file("../../cgi-bin/visits.dat");
  $visits=count ($visitsarray)-1; // for ther is \n\r at the end
  spliceintoarrays();
  $sorttime=$time;
  sort ($sorttime);
  $gap=$sorttime[count($sorttime)-1]-$sorttime[1];
  $gap_hrs=$gap/3600;
  $gap_days=$gap_hrs/24;
  $visitors=0; // is going to be written by getvisitors. visitor: visit with unique IP
  
  getvisitors();  
  $visitsperday=$visits/$gap_days;
  $visitorsperday=$visitors/$gap_days;
  
  echo " $visits Visits by $visitors IPs in $gap_days days ($visitsperday visits per day, $visitorsperday visitors per day)";

  
?>

</html>