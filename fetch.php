<?php 


/* PDO STATEMENT */
// PDO
$dbhost = "207.32.178.8";
$dbname = "prolines_live_oct112017";
$dbusername = "prolines_zencart";
$dbpassword = "CarrotFairsEnsueRhyme58";
// Search by Order ID
if (isset($_GET['pID']))
{
// define customer email
$pID = $_GET['pID'];
$pID = intval($pID);
$link = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbusername,$dbpassword);
// NEW SQL INNER JOIN
$sql = "
SELECT catalog_product_entity_varchar.attribute_id, catalog_product_entity_varchar.value, eav_attribute.attribute_code
FROM catalog_product_entity_varchar
JOIN eav_attribute on catalog_product_entity_varchar.attribute_id = eav_attribute.attribute_id
WHERE catalog_product_entity_varchar.entity_id = :pID
";
$sql = $link->prepare($sql);
$sql->bindParam(':pID', $pID, PDO::PARAM_INT);
$sql->execute();
$product_attributes = $sql->fetchAll();
if (empty($product_attributes))
{
	echo "No product with that ID was found";
	die();
}
$filtered_array = array(
	'spec_drawing'=>0,
	'depth' => 0,
	'spec_cfm' => 0,
	'spec_sone' =>0,
	'spec_lights'=> 0,
	'spec_height'=> 0,
	'spec_width'=> 0,
	'spec_blower'=> 0,
	'spec_duct_size'=> 0,
	'name'=> 0
);

foreach($product_attributes as $attribute)
{
	$new_name = $attribute['attribute_code'];
	switch ($attribute['attribute_code'])
	{
		case "spec_height" : $filtered_array[$new_name] = $attribute;
		break;
		case "spec_width" : $filtered_array[$new_name] = $attribute;
		break;
		case "depth" : $filtered_array[$new_name] = $attribute;
		break;
		case "spec_cfm" : $filtered_array[$new_name] = $attribute;
		case "spec_sone" : $filtered_array[$new_name] = $attribute;
		break;
		case "spec_lights" : $filtered_array[$new_name] = $attribute;
		break;
		case "spec_blower" : $filtered_array[$new_name] = $attribute;
		break;
		case "spec_duct_size" : $filtered_array[$new_name] = $attribute;
		break;
		case "spec_drawing" : $filtered_array[$new_name] = $attribute;
		break;
		case "spec_venting" : $filtered_array[$new_name] = $attribute;
		break;
		case "name" : $filtered_array[$new_name] = $attribute;
	}
}
$spec_sheet = $filtered_array;
require_once('spec_template.php');
}

?>