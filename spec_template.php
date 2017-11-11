<head>
	<link href='specsheet.css' rel='stylesheet' type='text/css'/>
</head>
<div class='container'>
	<img src="https://prolinestores.com/skin/frontend/base/default/proline_logo_new.png" alt="Proline Logo" class="spec-logo"/>
	<h1 class='spec-title'><?php echo $spec_sheet['name']['value'];?></h1>
	<div class='spec-drawing-container'>
	<a href="https://prolinestores.com/media/catalog/product<?php echo $spec_sheet['spec_drawing']['value'];?>">
	<img class='spec-drawing' alt="Spec Sheet for <?php echo $spec_sheet['name']['value'];?>" src="https://prolinestores.com/media/catalog/product<?php echo $spec_sheet['spec_drawing']['value'];?>"/>
	</a>
	</div>
	<table class='spec-table'>
		<th>Width</th>
		<th>Height</th>
		<th>Depth</th>
		<th>CFM</th>
		<th>Sone</th>
		<th>Lights</th>
		<th>Blower</th>
		<th>Venting</th>
		<th>Duct-Size</th>
		<tr>
			<td><?php echo $spec_sheet['spec_width']['value'];?></td>
			<td><?php echo $spec_sheet['spec_height']['value'];?></td>
			<td><?php echo $spec_sheet['depth']['value'];?></td>
			<td><?php echo $spec_sheet['spec_cfm']['value'];?></td>
			<td><?php echo $spec_sheet['spec_sone']['value'];?></td>
			<td><?php echo $spec_sheet['spec_lights']['value'];?></td>
			<td><?php echo $spec_sheet['spec_blower']['value'];?></td>
			<td><?php echo $spec_sheet['spec_venting']['value'];?></td>
			<td><?php echo $spec_sheet['spec_duct_size']['value'];?></td>
		</tr>
	</table>
</div>
