<?php
if(!file_exists("Salebration_1.mp4")){
  header("Location: http://huhtestmuch12546leh.netai.net/");
  exit;
}

$tablet_browser = 0;
$mobile_browser = 0;
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}
 
if ($tablet_browser > 0) {
   // do something for tablet devices
   header("Location: http://huhtestmuch12546leh.netai.net/");
   exit;
}
else if ($mobile_browser > 0) {
   // do something for mobile devices
   header("Location: http://huhtestmuch12546leh.netai.net/");
   exit;
}
 
?>



<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="favicon.ico">
    </head>
    <body bgcolor="#000000">

<video id="video_background" poster="poster.png" autoplay="autoplay">
<source src="Salebration_1.mp4" type="video/mp4"/>
</video>

        <center>

        <div id="wrapper"> 
           
           <img id="image_background" usemap="#bt17497" src="poster.png" border="0" />
        
        

        <map id="bt17497" name="bt17497" width="100%" height="auto">
        <!-- Region 1 -->
        <area shape="circle" alt="Go To Site" title="Go To Site" coords="617,366,226" href="http://huhtestmuch12546leh.netai.net" target="_self"  />
        <!-- Region 2 -->
        <area shape="circle" alt="Go To Facebook" title="Go To Facebook" coords="936,191,87" href="https://www.facebook.com/" target="_blank" />
        <!-- Region 3 -->
        <area shape="circle" alt="Go To Site" title="Go To Site" coords="275,217,128" href="http://huhtestmuch12546leh.netai.net/" target="_self" />
        <!-- Region 4 -->
        <area shape="circle" alt="Go To Twitter" title="Go To Twitter" coords="326,536,81" href="https://www.twitter.com" target="_blank" />
        <area shape="default" nohref alt="" />
        </map>

        </div>


        </center>

        <script>
           var video = document.getElementById('video_background');
           var wrapper = document.getElementById('wrapper'); 
           wrapper.style.display = 'none';
           var image = document.getElementById('image_background');
           video.addEventListener('ended', function() {
           video.style.display = 'none';
           wrapper.style.display = 'inline';
           image.style.display = 'inline';
        }, false);

        </script>       

    </body>
</html>