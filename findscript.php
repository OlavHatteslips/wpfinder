<?php
function curlContent($q){
  $response = $q;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $response);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_USERAGENT, "SomethingElse/1.0");
  //curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0'); 
  $response=curl_exec($ch);
//  echo $response; // Google's HTML source will be printed
  $myurl = $response;
  curl_close($ch);
  return $myurl;
}

if ($q !== "") {
  $q = $_REQUEST["q"];
  $myurl = curlContent($q);

 /* function file_get_contents_curl($url) {
    
    $url = $url;
         
    $crl = curl_init();
    curl_setopt($crl, CURLOPT_URL, $url);
    curl_setopt($crl, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
     
    $response = curl_exec($crl);
    if(!response){
       die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
    }
     
    curl_close($crl);

    $data = curl_exec($ch);

    return $data;
  }
  $myurl = file_get_contents_curl($q);*/

  /*
function curl_get_contents($url)
{
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($curl);
  curl_close($curl);
  return $data;
}

// get the q parameter from URL
$myurl = curl_get_contents($q);*/

//$myurl = curl_get_contents('https://www.w3schools.com/php/php_ajax_php.asp');
// echo "<div class='alert alert-outline-warning' role='alert'>".$myurl."</div>";
/*if($myurl === FALSE){
  $c = curl_init($q);
  curl_setopt($c, CURLOPT_RETURNTRANSFER, true);


  $html = curl_exec($c);

  if (curl_error($c))
  die(curl_error($c));

  // Get the status code
  $status = curl_getinfo($c, CURLINFO_HTTP_CODE);
  echo "<div class='alert alert-danger' role='alert'>".$status."</div>"; 
  curl_close($c);
}*/

  
  if ($myurl === FALSE) {
    echo "<div class='alert alert-danger' role='alert'>Denne hjemmeside bruger snedige ninja-tricks - vi kan ikke spore den.</div>";
    return false;
  }


  function preg_match_assoc($pattern, $subject, $assoc, $flags = 0, $offset = 0) {
    $matches = array();
    eval('preg_match($pattern, $subject, $matches, $flags, $offset);');
    $n = 0;
    foreach($matches as $result) {
        $array[$assoc[$n]] = $result;
        $n++;
    }
    return $array;
}

/*
function loadNprepare($url,$encod='') {
        if($url != NULL){
     
        $content = $url;
        if (!empty($content)) {
                if (empty($encod))
                        $encod  = mb_detect_encoding($content);
                $headpos        = mb_strpos($content,'<head>');
                if (FALSE=== $headpos)
                        $headpos= mb_strpos($content,'<HEAD>');
                if (FALSE!== $headpos) {
                        $headpos+=6;
                        $content = mb_substr($content,0,$headpos) . '<meta http-equiv="Content-Type" content="text/html; charset='.$encod.'">' .mb_substr($content,$headpos);
                }
                $content=mb_convert_encoding($content, 'HTML-ENTITIES', $encod);
        }
        $dom = new DomDocument;
      libxml_use_internal_errors(true);
    
      $dom->resolveExternals = true;
    $dom->substituteEntities = false;

        $res = $dom->loadHTML($content);
        libxml_clear_errors();
        if (!$res) return FALSE;
        $rep =  $dom->getElementsByTagName("*");
     
       $specialcode = htmlspecialchars($content);
      
    $findme   = htmlspecialchars('script');
    $pos = strpos($content, $findme);

    $string = "Security incident detected";



    if ( preg_match("~\bSecurity\b~",htmlspecialchars($content)) && preg_match("~\bdetected\b~",htmlspecialchars($content))  ){

      echo "<div class='alert alert-danger' role='alert'>Denne hjemmeside blokerer os - sikkert af sikkerheds&aring;rsager. Vi beklager.</div>";
      return;
    }


$contents = str_replace(array("\r","\r\n","\n\r","\n"),"\n",$content);
$lines = explode("\n", $contents);

$homepageURL = $_REQUEST["q"];

    // Note our use of ===.  Simply == would not work as expected
    // because the position of 'a' was the 0th (first) character.
    if ($pos === false) {
        echo "<div class='alert alert-warning' role='alert'>Uups... vi kunne ikke finde noget p&aring; den hjemmeside</div>";
    } else {
        echo "<div class='alert alert-success' role='alert'>Tillykke - ".$homepageURL." hjemmeside benytter JS og CSS-filer</div>";
    }

    $matches = array();


$pattern = "/\b(.js)\b/i";
$patternScript = "/\b(script)\b/i";

$patternCSS = "/\b(.css)\b/i";
$patternCSSlink = "/\b(link)\b/i";

$patternFONT = "/\b(family)\b/i";
$patternFONTLink = "/\b(stylesheet)\b/i";

#find your result
$result = $line_num = array();
$result2 = $line_num2 = array();
foreach($lines as $line_num2 => $l)
  if( preg_match($pattern, $l, $matches) && preg_match($patternScript, $l, $matches) ){
    $result2[] = $l;
    $line_nums[] = $line_num2;
  }

$result3 = $line_num3 = array();
foreach($lines as $line_num3 => $l)
  if( preg_match($patternCSS, $l, $matches) && preg_match($patternCSSlink, $l, $matches)  ){
    $result3[] = $l;
    $line_nums3[] = $line_num3;
  }

$result4 = $line_num4 = array();
foreach($lines as $line_num4 => $l)
  if( preg_match($patternFONT, $l, $matches) && preg_match($patternFONTLink, $l, $matches)   ){
    $result4[] = $l;
    $line_nums4[] = $line_num4;
  }

  echo "

  <div class='row'>
    <div class='col-lg-6'>

    ";
echo "Denne hjemmeside bruger <button class='btn btn-outline-primary'> <span class='badge badge-warning'> ".count($result2). "</span><span class='sr-only'>scripts</span> Javascripts</button>";

echo "<ul class='list-group'>";
foreach ($result2 as $key => $value) {
  $resultingVar = htmlspecialchars($value);

  $pos = strpos($resultingVar, ".js");
  $endpoint = $pos + strlen(".js");
  $newStr = substr($resultingVar,0,$endpoint );

  echo "<li class='list-group-item'>".$newStr."</li>";
 
}
echo "</ul>";
echo "</div>
 <div class='col-lg-6'>
";

echo "Denne hjemmeside bruger <button class='btn'> <span class='badge badge-warning'> ".count($result3). " </span><span class='sr-only'>scripts</span> CSS filer</button>";

echo "<ul class='list-group'>";
foreach ($result3 as $key => $value2) {
  $resultingVarCSS = $value2;

  
 
  echo "<li class='list-group-item'>".htmlspecialchars($resultingVarCSS)."</li>";
 
}
echo "</ul>";

echo "</div>";


echo "</div>
 <div class='col-lg-12'>
";

echo "Denne hjemmeside bruger <button class='btn'> <span class='badge badge-warning'> ".count($result4). " </span><span class='sr-only'>font typen</span> font typen</button>";

echo "<ul class='list-group'>";
foreach ($result4 as $key => $value4) {
  $resultingVarFONT = htmlspecialchars($value4);
  //var_dump($resultingVarFONT);
/*  $pos1 = strpos($resultingVarFONT, "family");

  $endpoint1 = $pos + strlen("family");

  $newStr1 = substr($$resultingVarFONT,0,$endpoint1 );


  echo "<li class='list-group-item'>".$resultingVarFONT."</li>";
 
}
echo "</ul>";

echo "</div>

</div>
";

}else{
  echo "<div class='alert alert-danger' role='alert'>Denne hjemmeside blokerer for vores services. Vi beklager.</div>";
}

       
  }


 


        
          loadNprepare($myurl, 'UTF-8');

          mb_detect_order("ASCII,UTF-8,ISO-8859-1,windows-1252,iso-8859-15");
        
    
*/

  /*

$gre = $_REQUEST["grecaptcha"];
if ($gre !== "") {
    //if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6LfEbyUTAAAAABWD88YD87sjMwxFSkMpnrz9FF03';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$gre);
        $responseData = json_decode($verifyResponse);
        if($responseData->success){
        
          loadNprepare($myurl, 'UTF-8');

          mb_detect_order("ASCII,UTF-8,ISO-8859-1,windows-1252,iso-8859-15");
        }
    }
    else{
    
      echo "<div class='alert alert-warning' role='alert'>Du skal udfylde recaptcha-feltet!</div>";
    }  
}else{
  echo "ERROR HANDLING";
}*/

/*
public function loadNprepare($url, $encode) {
  if($url != NULL){
    echo "HEJ";
  }

}
*/

function loadNprepare($url, $encode) {
  if($url != NULL){
    $content = $url;
    if (!empty($content)) {
      if (empty($encode))
      {
        echo $content;
        $encode  = mb_detect_encoding($content);
       $headpos = mb_strpos($content,'<head>');
        if (FALSE=== $headpos)
        {
          $headpos= mb_strpos($content,'<HEAD>');
          if (FALSE!== $headpos) {
            $headpos+=6;
            $content = mb_substr($content,0,$headpos) . '<meta http-equiv="Content-Type" content="text/html; charset='.$encod.'">' .mb_substr($content,$headpos);
          }
          $content=mb_convert_encoding($content, 'HTML-ENTITIES', $encod);
          
        }
      }
      
     
      libxml_use_internal_errors(true);
      $errors = libxml_get_errors();

      if(count($errors) > 0) {
        echo 'This item does not exist';
      } else {
        echo 'Successful';
      }
   
      $dom = new DOMDocument();
      $dom->resolveExternals = true;
      $dom->substituteEntities = false;
      $res = $dom->loadHTML($content);
      libxml_clear_errors();
      if (!$res) return FALSE;
      $rep =  $dom->getElementsByTagName("*");

      $specialcode = htmlspecialchars($content);

      $findme   = htmlspecialchars('script');
      $pos = strpos($content, $findme);

      $string = "Security incident detected";


      //var_dump($specialcode);
      if ( preg_match("~\bSecurity\b~",htmlspecialchars($content)) && preg_match("~\bdetected\b~",htmlspecialchars($content))  ){

        echo "<div class='alert alert-danger' role='alert'>Denne hjemmeside blokerer os - sikkert af sikkerheds&aring;rsager. Vi beklager.</div>";
        return;
      }

      $contents = str_replace(array("\r","\r\n","\n\r","\n"),"\n",$specialcode);
      $lines = explode("\n", $contents);
      $matches = array();

      $pattern = "/\b(.js)\b/i";
      $patternScript = "/\b(script)\b/i";
      
      $patternCSS = "/\b(style)\b/i";
      $patternCSSlink = "/\b(link)\b/i";
      $patternCSS2 = "/\b(.css)\b/i";
      
      $patternFONT = "/\b(family)\b/i";
      $patternFONTLink = "/\b(stylesheet)\b/i";
      
      #find your result
      $result = $line_num = array();
      $result2 = $line_num2 = array();
    
    //  var_dump($result2);
     /* foreach($lines as $line_num2 => $l){
        if( preg_match($pattern, $l, $matches) ){
          $result2[] = $l;
          $line_nums[] = $line_num2;
        }
      }*/

      $result3 = $line_num3 = array();
      $result4 = $line_num4 = array();

      foreach($lines as $line_num3 => $l){
        if( preg_match($patternCSS2, $l, $matches)   ){
        $result3[] = $l;
        $line_nums3[] = $line_num3;
        }

       // preg_match_all('#<style>(.*?)</style>#is', $haystack, $matches, PREG_SET_ORDER);
        if( preg_match($patternFONT, $l, $matches)   ){
          $result4[] = $l;
          $line_nums4[] = $line_num4;
          }
        
        
        if( preg_match($pattern, $l, $matches) ){
          $result2[] = $l;
          $line_nums[] = $line_num2;
        }

      }
/*
      foreach($lines as $line_num4 => $l){
        if( preg_match($patternCSS, $l, $matches)   ){
        $result4[] = $l;
        $line_nums4[] = $line_num4;
        }
      }*/

  
          echo "
        
          <div class='row'>
            <div class='col-lg-6'>
        
            ";
        echo "Denne hjemmeside bruger <button class='btn btn-outline-primary'> <span class='badge badge-warning'> ".count($result2). "</span><span class='sr-only'>scripts</span> Javascripts</button>";
        
        echo "<ul class='list-group'>";
        foreach ($result2 as $key => $value) {
          $resultingVar = htmlspecialchars($value);
        
          $pos = strpos($resultingVar, ".js");
          $endpoint = $pos + strlen(".js");
          $newStr = substr($resultingVar,0,$endpoint );

          
        
          echo "<li class='list-group-item'>".$newStr."</li>";
         
        }
        echo "</ul>
        </div>
      
        <div class='col-lg-6'>


Denne hjemmeside bruger <button class='btn'> <span class='badge badge-warning'> ".count($result3). " </span><span class='sr-only'>scripts</span> CSS filer</button>";

echo "<ul class='list-group'>";
foreach ($result3 as $key => $value2) {
  $resultingVarCSS = $value2;

 // $pos = strpos($resultingVarCSS, ".js");
  //$endpoint = $pos + strlen(".css");
  //$newStr = substr($resultingVarCSS,0,$endpoint );
  $resultingVarCSS = substr($resultingVarCSS, 0, strpos($resultingVarCSS, "?"));
  $newVar = strstr($resultingVarCSS, 'wp-content/');
  echo "<li class='list-group-item'>".htmlspecialchars($resultingVarCSS)."</li>";
}
echo "</ul>
</div>



</div>

<div class='col-lg-6'>


Denne hjemmeside bruger <button class='btn'> <span class='badge badge-warning'> ".count($result4). " </span><span class='sr-only'>font typen</span> font typen</button>

<ul class='list-group'>";
foreach ($result4 as $key => $value4) {
  $resultingVarFONT = htmlspecialchars($value4);
  //var_dump($resultingVarFONT);
  $pos1 = strpos($resultingVarFONT, "family");
  $endpoint1 = $pos + strlen("family");
  $newStr1 = substr($$resultingVarFONT,0,$endpoint1 );
  echo "<li class='list-group-item'>".$resultingVarFONT."</li>";
 
}
echo "</ul>

</div>

";
     
  }
   

  }

}

loadNprepare($myurl, 'UTF-8');


}


?>