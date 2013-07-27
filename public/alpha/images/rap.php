<?php
error_reporting(1);

$conn = new Mongo('localhost');
//echo $_SESSION['array_keys'];
$db = $conn->fwd_db;
// access collection
$collection = $db->products;
$collection->remove();

$client = new SoapClient("https://technet.rapaport.com/WebServices/RetailFeed/Feed.asmx?WSDL",
      array( "trace" => 1, "exceptions" => 0, "cache_wsdl" => 0) );

$params = array('Username'=>'90400', 'Password'=>'Va!y0012#$'); 
$client->__soapCall("Login", array($params), NULL, NULL, $output_headers);

//echo "<p> Request :".($client->__getLastRequest()) ."</p>"; 
//echo "<p> Request :".($client->__getLastResponse())."</p>";


$ticket = $output_headers["AuthenticationTicketHeader"]->Ticket;

$client1 = new SoapClient("https://technet.rapaport.com/WebServices/RetailFeed/Feed.asmx?WSDL", array( "trace" => 1, "exceptions" => 0, "cache_wsdl" => 0) );

$ns = "http://technet.rapaport.com/";
$headerBody = array("Ticket" => $ticket);
$header = new SoapHeader($ns, 'AuthenticationTicketHeader', $headerBody);
$client1->__setSoapHeaders($header);
// "PEAR", "PRINCESS", "MARQUISE", "EMERALD", "ASSCHER", "OVAL", "TRILLIANT", "HEART", "CUSHION", "ROSE", "SQUARE", "TRIANGULAR" 
$rate=file_get_contents('http://rate-exchange.appspot.com/currency?from=USD&to=INR');

preg_match_all('/"rate":(\s*?)(.*?)(\s*?)(.*?)(\s*?),/s',$rate,$dollar);

$rate=(integer)($dollar[4][0]);

for($start=1;$start<2000;$start++){
$searchParams = array(
"ShapeCollection" => array("ROUND","PEAR","PRINCESS","MARQUISE", "EMERALD","ASSCHER", "OVAL",  "RADIANT", "HEART", "CUSHION" ),
"LabCollection" => array("GIA", "IGI"),
"PageNumber" => $start,
"PageSize" => 25,
"SortDirection" => "ASC",
"SortBy" => "PRICE"
);

$params1 = array("SearchParams" => $searchParams, "DiamondsFound" => 0); $client1->__soapCall("GetDiamonds", array($params1), NULL, NULL, $output_headers);
//print_r($client1->__getLastResponse());
//exit;
				preg_match_all('/<DiamondID>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<DiamondID>/s',$client1->__getLastResponse(),$st);
				$diamonds = array();

				for($theone=0;$theone<count($st[0]);$theone++){
				//print_r($st[0][$theone]);echo"<br>";print_r($st[0][2]);echo"<br>";print_r($st[0][3]);
				//exit;
				preg_match_all('/<DiamondID>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/DiamondID>/s',$st[0][$theone],$a);
				preg_match_all('/<ShapeTitle>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/ShapeTitle>/s',$st[0][$theone],$b);
				preg_match_all('/<Weight>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/Weight>/s',$st[0][$theone],$c);
				preg_match_all('/<ColorTitle>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/ColorTitle>/s',$st[0][$theone],$d);
				preg_match_all('/<CutLongTitle>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/CutLongTitle>/s',$st[0][$theone],$e);
				preg_match_all('/<ClarityTitle>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/ClarityTitle>/s',$st[0][$theone],$f);
				preg_match_all('/<LabID>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/LabID>/s',$st[0][$theone],$g);
				preg_match_all('/<LabTitle>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/LabTitle>/s',$st[0][$theone],$h);
				preg_match_all('/<RapNetPrice>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/RapNetPrice>/s',$st[0][$theone],$i);
				preg_match_all('/<FinalPrice>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/FinalPrice>/s',$st[0][$theone],$j);
				preg_match_all('/<CertificateNumber>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/CertificateNumber>/s',$st[0][$theone],$k);
				preg_match_all('/<VendorStockNumber>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/VendorStockNumber>/s',$st[0][$theone],$l);
				preg_match_all('/<SymmetryGroupID>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/SymmetryGroupID>/s',$st[0][$theone],$m);
				preg_match_all('/<SymmetryTitle>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/SymmetryTitle>/s',$st[0][$theone],$n);
				preg_match_all('/<PolishGroupID>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/PolishGroupID>/s',$st[0][$theone],$o);
				preg_match_all('/<PolishTitle>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/PolishTitle>/s',$st[0][$theone],$p);
				preg_match_all('/<DepthPercent>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/DepthPercent>/s',$st[0][$theone],$q);
				preg_match_all('/<TablePercent>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/TablePercent>/s',$st[0][$theone],$r);
				preg_match_all('/<MeasLength>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/MeasLength>/s',$st[0][$theone],$s);
				preg_match_all('/<MeasWidth>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/MeasWidth>/s',$st[0][$theone],$t);
				preg_match_all('/<MeasDepth>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/MeasDepth>/s',$st[0][$theone],$u);
				preg_match_all('/<CuletSizeTitle>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/CuletSizeTitle>/s',$st[0][$theone],$v);
				preg_match_all('/<FluorescenceColorTitle>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/FluorescenceColorTitle>/s',$st[0][$theone],$w);
				preg_match_all('/<FluorescenceIntensityTitle>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/FluorescenceIntensityTitle>/s',$st[0][$theone],$x);
				preg_match_all('/<HasCertFile>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/HasCertFile>/s',$st[0][$theone],$y);
				preg_match_all('/<GirdleSizeMin>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/GirdleSizeMin>/s',$st[0][$theone],$z);
				preg_match_all('/<GirdleSizeMax>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/GirdleSizeMax>/s',$st[0][$theone],$a1);
				preg_match_all('/<GirdleConditionTitle>(\s*?)(.*?)(\s*?)(.*?)(\s*?)<\/GirdleConditionTitle>/s',$st[0][$theone],$b1);
/*
echo($a[4][0]).'<br>';
echo($b[4][0]).'<br>';
echo($c[4][0]).'<br>';
echo($d[4][0]).'<br>';
echo($e[4][0]).'<br>';
echo($f[4][0]).'<br>';
echo($g[4][0]).'<br>';
echo($h[4][0]).'<br>';
echo($i[4][0]).'<br>';
echo($j[4][0]).'<br>';
echo($k[4][0]).'<br>';
echo($l[4][0]).'<br>';
echo($m[4][0]).'<br>';
echo($n[4][0]).'<br>';
echo($o[4][0]).'<br>';
echo($p[4][0]).'<br>';
echo($q[4][0]).'<br>';
echo($r[4][0]).'<br>';
echo($s[4][0]).'<br>';
echo($t[4][0]).'<br>';
echo($u[4][0]).'<br>';
echo($v[4][0]).'<br>';
echo($w[4][0]).'<br>';
echo($x[4][0]).'<br>';
echo($y[4][0]).'<br>';
echo($z[4][0]).'<br>';
echo($a1[4][0]).'<br>';
echo($b1[4][0]).'<br>';
echo "<hr>";*/

// "_id" : ObjectId("51f0f0bbc56f37d569a44586"), "category_ids" : [  22 ], "cost" : null, "date_created" : ISODate("2013-07-25T09:32:43Z"), "date_updated" : ISODate("2013-07-25T09:37:34Z"), "description" : null, "id" : 14, "images" : { "default" : { "src" : "/images/products/14_default.jpg", "name" : "default" } }, "is_active" : true, "is_bundle" : null, "name" : "Diamond1", "page_desc" : null, "page_keywords" : null, "page_title" : null, "price" : 23000, "pricing" : null, "primary_category_id" : null, "sku" : "diamond:001", "slug" : "diamond1", "weight" : null

/*                       'slug',
                        'name',
                        'price',
                        'cost',
                        'sku',
                        'weight',
                        'description',
                        'category_ids',
                        'variants',
                        'items',
                        'stock',
                        'images',
                        'is_bundle',
                        'is_active',
                        'date_created',
                        'date_updated',*/
?>
<?php
//if(is_numeric($a[4][0]))


$price_per_carat= '₹ '.round(($rate *(integer)$j[4][0])/($c[4][0]),0);

system('cp /var/www/fwdcommerce/public/alpha/images/solthumb.jpg /var/www/fwdcommerce/public/images/products/'.(integer)$a[4][0].'_default.jpg');
$certurl='http://www.diamondselections.com/GetCertificate.aspx?DiamondID='.(integer)$a[4][0];
$description="<table><tr><td>Shape: </td><td>".$b[4][0]."</td></tr><tr><td>Weight: </td><td>".$c[4][0]." carat(s)</td></tr><tr><td>Color: </td><td>".$d[4][0]."</td></tr><tr><td>Cut</td><td>".$e[4][0]."</td></tr><tr><td>Clarity: </td><td>".$f[4][0]."</td></tr><tr><td>Polish: </td><td>".$p[4][0]."</td></tr><tr><td>Length: </td><td>".$s[4][0]."</td></tr><tr><td>Width: </td><td>".$t[4][0]."</td></tr><tr><td>Depth: </td><td>".$u[4][0]."</td></tr><tr><td>Lab: </td><td>".$h[4][0]."</td></tr><tr><td>Certificate No: </td><td>".$k[4][0]."</td></tr><tr><td>Price: </td><td>₹ ".$rate *(integer)$j[4][0]."</td></tr><tr><td>Price/Ct.</td><td>".$price_per_carat."</td></tr><tr><td colspan='2'><a href='".$certurl."' target='_blank'>View Certificate</a></td></tr></table>";
 
  $diamonds[] = array('is_active'=>true,'images'=>array('default'=>array('src'=>'/images/products/solthumb.jpg','name'=>'default')),'name'=>$c[4][0].' Carat '. $b[4][0].' diamond ('.$h[4][0].'-'.$k[4][0].')','id' => (integer)$a[4][0],'sku' => 'sol:'.$a[4][0],'slug'=>'diamond-'.$a[4][0] ,'shape' => $b[4][0],'weight' => $c[4][0],'ColorTitle' => $d[4][0],'CutLongTitle' => $e[4][0],'ClarityTitle' => $f[4][0],'LabID' => $g[4][0],'LabTitle' => $h[4][0],'cost' => $rate *(int)$i[4][0],'price' => $rate *(integer)$j[4][0],'CertificateNumber' => $k[4][0],'VendorStockNumber' => $l[4][0],'SymmetryGroupID' => $m[4][0],'SymmetryTitle' => $n[4][0],'PolishGroupID' => $o[4][0],'PolishTitle' => $p[4][0],'DepthPercent' => $q[4][0],'TablePercent' => $r[4][0],'MeasLength' => $s[4][0],'MeasWidth' => $t[4][0],'MeasDepth' => $u[4][0],'CuletSizeTitle' => $v[4][0],'FluorescenceColorTitle' => $w[4][0],'FluorescenceIntensityTitle' => $x[4][0],'HasCertFile' => $y[4][0],'GirdleSizeMin' => $z[4][0],'GirdleSizeMax' => $a1[4][0],'GirdleConditionTitle' => $b1[4][0],'description'=>$description,'price_per_carat'=>$price_per_carat);

//[productID]_[name].jpg

?>
<?php
//<CuletSizeTitle>None</CuletSizeTitle><FluorescenceColorTitle>Blue</FluorescenceColorTitle><FluorescenceIntensityTitle>Medium</FluorescenceIntensityTitle><HasCertFile>false</HasCertFile>

				}
				echo  $start."\n";

				if(!empty($diamonds)){

			//	print_r($diamonds[10]);
					//print_r($diamonds);
$collection->batchInsert($diamonds);

				}


}
//echo($st);
//echo "<p> Request :".($client1->__getLastRequest())."</p>";
//echo ($client1->__getLastResponse());


exit;

?>

<?php 
/*
require_once('lib/nusoap.php'); 

$soapUrl = "https://technet.rapaport.com/WebServices/RetailFeed/RetailFeed.asmx?wsdl"; 
$client = new nusoap_client($soapUrl, 'wsdl', null, null, null, null); 

//prepare credentials: 
$credentials = array( 
'Username' => '90400', 
'Password' => 'Va!y0012#$');

$result = $client->call('Login', array('parameters' => $credentials), '', '', false, true); 
$auth_ticket = $client->getHeaders(); 

$searchparams["Shape"] = "ROUND"; 
$searchparams["SizeFrom"] = "0.01"; 
$searchparams["SizeTo"] = "20.99"; 
$searchparams["ColorFrom"] = "D"; 
$searchparams["ColorTo"] = "K"; 
$searchparams["ClarityFrom"] = "IF"; 
$searchparams["ClarityTo"] = "VS2"; 
$searchparams["CutFrom"] = "EXCELLENT"; 
$searchparams["CutTo"] = "GOOD"; 
$searchparams["PriceFrom"] = "1"; 
$searchparams["PriceTo"] = "999999"; 
$searchparams["Page"] = 1; 
$searchparams["PageSize"] = 20; 
$searchparams["DiamondsFound"] = 100; 

$client->setHeaders($auth_ticket); 
$result = $client->call('GetDiamonds', array('parameters' => $searchparams), '', '', false, true); 


echo '<h2>Result diamonds</h2><pre>'; 
echo($result); 
echo '</pre>'; 
*/
?>
