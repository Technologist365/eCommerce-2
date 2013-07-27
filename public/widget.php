<link rel="stylesheet" type="text/css" href="style_grid.css" media="screen" />

<?php
include('/var/www/fwdcommerce/public/MongoPagination.php');

$mongoConn = new Mongo();
$mongoHandler = $mongoConn->fwd_db;
$pagination = new MongoPagination($mongoHandler);
$itemsPerPage   = 25;
if(!is_numeric($_REQUEST['page'])){
	$currentPage    = 1;

}else{
		$currentPage    = $_REQUEST['page'];

}
 $filter=  array();

$pagination->setQuery(array(
	  '#collection'	=>  'products',
	  '#find'		=>  $filter,
	  '#sort'		=>  array(
	  'price'	=>  -1
	  ),
	), $currentPage, $itemsPerPage);
$dataSet    = $pagination->Paginate();
$page_links = $pagination->getPageLinks();
$yourArray=$dataSet['dataset'];
//echo '<pre>';
//print_r($yourArray[0]);
//echo '</pre>';
//{ "_id" : ObjectId("51f22388c56f3759269895fe"), "is_active" : true, "images" : { "default" : { "src" : "/images/products/solthumb.jpg", "name" : "default" } }, "name" : "0.110 Carat Round Very Good diamond", "id" : 39039428, "sku" : "sol:39039428", "slug" : "diamond-39039428", "shape" : "Round", "weight" : "0.110", "ColorTitle" : "G", "CutLongTitle" : "Excellent", "ClarityTitle" : "VS2", "LabID" : "2", "LabTitle" : "IGI", "cost" : 6018, "price" : 7847, "CertificateNumber" : "M2D88053", "VendorStockNumber" : "M2D88053", "SymmetryGroupID" : "2", "SymmetryTitle" : "Very Good", "PolishGroupID" : "3", "PolishTitle" : "Very Good", "DepthPercent" : "60.0", "TablePercent" : "60.50", "MeasLength" : "3.12", "MeasWidth" : "3.14", "MeasDepth" : "1.90", "CuletSizeTitle" : null, "FluorescenceColorTitle" : null, "FluorescenceIntensityTitle" : "Very Slight", "HasCertFile" : "false", "GirdleSizeMin" : "Medium", "GirdleSizeMax" : "Medium", "GirdleConditionTitle" : null, "description" : "<table><tr><td>Shape: </td><td>Round</td></tr><tr><td>Weight: </td><td>0.110 carat(s)</td></tr><tr><td>Color: </td><td>G</td></tr><tr><td>Cut Long: </td><td>Excellent</td></tr><tr><td>Clarity: </td><td>VS2</td></tr><tr><td>Lab: </td><td>IGI</td></tr><tr><td>Price: </td><td>Rs 7847</td></tr><tr><td>Polish: </td><td>Very Good</td></tr><tr><td>Length: </td><td>3.12</td></tr><tr><td>Width: </td><td>3.14</td></tr></table>" }

?>
<table  class="table-bordered">

<tr><th>Shape&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=1&sortby=shape"><img border="0" src="u.gif"></a>&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=0&sortby=shape"><img border="0" src="d.gif"></a></th><th>Size&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=1&sortby=weight"><img border="0" src="u.gif"></a>&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=0&sortby=weight"><img border="0" src="d.gif"></a></th><th>Color&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=1&sortby=ColorTitle"><img border="0" src="u.gif"></a>&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=0&sortby=ColorTitle"><img border="0" src="d.gif"></a></th><th>Clarity&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=1&sortby=ClarityTitle"><img border="0" src="u.gif"></a>&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=0&sortby=ClarityTitle"><img border="0" src="d.gif"></a></th><th>Cut&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=1&sortby=shape"><img border="0" src="u.gif"></a>&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=0&sortby=CutLongTitle"><img border="0" src="d.gif"></a> </th><th>Polish&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=1&sortby=PolishTitle"><img border="0" src="u.gif"></a>&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=0&sortby=PolishTitle"><img border="0" src="d.gif"></a> </th><th>Symmetry&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=1&sortby=SymmetryTitle"><img border="0" src="u.gif"></a>&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=0&sortby=SymmetryTitle"><img border="0" src="d.gif"></a></th><th>Fluorescence&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=1&sortby=FluorescenceIntensityTitle"><img border="0" src="u.gif"></a>&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=0&sortby=FluorescenceIntensityTitle"><img border="0" src="d.gif"></a></th><!--<th>Measurement</th>--><th>Lab&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=1&sortby=LabTitle"><img border="0" src="u.gif"></a>&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=0&sortby=LabTitle"><img border="0" src="d.gif"></a></th><th>Price&nbsp;₹&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=1&sortby=price"><img border="0" src="u.gif"></a>&nbsp;<a style="color:#000;font-weight:normal" href="widget.php?sort=0&sortby=price"><img border="0" src="d.gif"></a>&nbsp;</th><th> </th></tr>

    
     <?php foreach ($yourArray as $row) : ?>
     <tr>
				<td><?php echo strip_tags($row['shape']);?> </td>
				<td><?php echo strip_tags($row['weight']);?></td>
				<td><?php echo strip_tags($row['ColorTitle']);?></td>
				<td><?php echo strip_tags($row['ClarityTitle']);?></td>
				<td><?php echo strip_tags($row['CutLongTitle']);?></td>
				<td><?php echo strip_tags($row['PolishTitle']);?></td>
				<td><?php echo strip_tags($row['SymmetryTitle']);?></td>
				<td><?php echo strip_tags($row['FluorescenceIntensityTitle']);?></td>
				<!--<td><?php echo strip_tags($row['MeasLength']);?> x <?php echo strip_tags($row['MeasWidth']);?> x <?php echo strip_tags($row['MeasDepth']);?> mm</td>-->

				<td><?php echo strip_tags($row['LabTitle']);?></td>
				<td>₹ <?php echo strip_tags($row['price']);?></td>
				<td><a target="_parent"  href="http://solitaires.jewelskart.com/products/<?php echo strip_tags($row['slug']);?>"><img border="0" src="ViewButton.png"></a></td>
	</tr>

     <?php endforeach; ?>
   </table>
 <br>
<?php echo $page_links ;?>
