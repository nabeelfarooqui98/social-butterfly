<?php
session_start();
include 'scripts/DbConnect.php';

$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

/*
//lookup all links from the xml file if length of q>0
$hint="";
$sql="SELECT fname FROM users WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
  for($i=0; $i<($x->length); $i++) 
  {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) 
    {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))
      {
        if ($hint=="") 
        {
          $hint="<a href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "' target='_blank'>" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } 
        else 
        {
          $hint=$hint . "<br /><a href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "' target='_blank'>" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") 
{
  $response="no suggestion";
} 
else 
{
  $response=$hint;
}
*/
$response='785998';
//output the response
echo $response;
?>