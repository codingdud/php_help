<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function getBrowser(){
      $agent=$_SERVER['HTTP_USER_AGENT'];
      $bname='Unknown';//browser name
      $platform='Unknow';
      $version="";

      //now we are going to find which platforn requsting
      if(preg_match('/linux/i',$agent)){
        $platform='linux';
      }
      elseif(preg_match('/macintosh|mac os x/i',$agent)){
        $platform='mac';
      }
      elseif(preg_match('/windows|win32/i',$agent)){
        $platform='windows';
      }

      //now we are going to  find wich browser is this
      if(preg_match('/MSIE/i',$agent&&!preg_match('/Opera/i',$agent))){
        $bname='Internet Explorer';
        $ub='MSIE';
      }
      elseif(preg_match('/Firefox/i',$agent)){
        $bname='Firefox';
      }
      elseif(preg_match('/Chrome/i',$agent)){
        $bname='Google Chrome';
        $ub='Chrome';
      }
      elseif(preg_match('/Safari/i',$agent)){
        $bname='Apple Safari';
        $ub='Safari';
      }
      elseif(preg_match('/Opera/i',$agent)){
        $bname='Opera';
        $ub='Opera';
      }
      elseif(preg_match('/Netscape/i',$agent)){
        $bname='Netscape';
        $ub='Netscape';
      }
      $known=array('Version',$ub,'other');

      $patter='#(?<browser>'.join('|',$known).')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';

      if (!preg_match_all($patter,$agent,$matches)) {

      }
      $i=count($matches['browser']);
      if($i!=1){
        if (strripos($agent,"Version")<strripos($agent,$sub)) {
          $version=$matches['version'][0];
        }
        else {
          $version=$matches['version'][1];

        }

      }
      else {
        $version=$matches['version'][0];
      }
      if ($version==null||$version=="") {
        $version="?";
      }
      return array('uagent' => $agent,
                   'name'=>$bname,
                   'version'=>$version,
                   'platform'=>$platform,
                   'patter'=>$patter
                   );


    }
    $ua=getBrowser();
    $output="Your browser:".$ua['name']." ".$ua['version']." (version)on ".$ua['platform']." reports:<br> ".$ua['uagent'];
    print_r($output);
     ?>

  </body>
</html>
