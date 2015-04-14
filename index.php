<?php require_once "index.logic.php" ?>
<!doctype html>
<html>
	<head>
		<title>sliding table data</title>
		<meta charset="UTF-8"> 
		<link rel="stylesheet" href="style.css" type="text/css">
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="jquery.tabledataslider.js"></script>
		<script>
			$(function(){
				$('tr.data').tabledataslider({detailIdPrefix:'detail'});
				$('tr.details').show();
			});
		</script>		
	</head>
	<body>
		<table class="data">
			<tr>
				<th>Name</th>
				<th>Platform</th>
			</tr>
<?php
	foreach($games as $game):
?>
			<tr id="data<?=$game['id']?>" class="data"> <!-- TR id essential for slider -->
				<td><?=$game['name']?></td><td><?=$game['platform']?></td>
			</tr>
			<tr class="details">
				<td id="detail<?=$game['id']?>" colspan=2><!-- TD id essential for slider -->
					<table>
						<tr>
							<td><label>Developer: </label><?=$game['developer_name']?></td><td><label>Publisher: </label><?=$game['publisher_name']?></td>
						</tr>
						<tr>
							<td colspan="2" class="review-title">Reviews</td>
						</tr>
<?php
		foreach(getReviews($game['id']) as $review):
?>
						<tr>
							<td colspan="2" class="review-grade">
								<h4><label>Grade: </label><?=$review['grade']?></h4>
								<?=$review['description']?> <a href="<?=$review['url']?>" target="_blank">more...</a>
							</td>
						</tr>
<?php
		endforeach;
?>
					</table>
				</td>
			</tr>
<?php
	endforeach;
?>
		</table>
	</body>	
</html>
