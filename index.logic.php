<?php
	$connection = new mysqli('localhost','root','','metacritic');
	$query = "
select game.*, developer.name as developer_name, publisher.name as publisher_name
from game
left join developer on game.developer_id = developer.id
left join publisher on game.publisher_id = publisher.id	
	";
	$result = $connection->query($query);
	$games = $result->fetch_all(MYSQLI_ASSOC);
	
	function getReviews($gameid){
		global $connection;
		$query = "
select * from review 
where review.game_id = $gameid
		";
		$result = $connection->query($query);
		return $result->fetch_all(MYSQLI_ASSOC);
	}
?>