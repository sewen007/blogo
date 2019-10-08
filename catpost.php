<?php require_once 'engine/requires.php';

$stmt = db->prepare('SELECT blog_id,title FROM blogposts WHERE tags = :tags');
$stmt->execute(array(':catSlug' => $_GET['id']));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['blog_id'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - <?php echo $row['title'];?></title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
</head>
<body>

	<div id="wrapper">

		<h1>Blog</h1>
		<p>Posts in <?php echo $row['title'];?></p>
		<hr />
		<p><a href="./">Blog Index</a></p>

		<?php	
		try {

			$stmt = $db->prepare('
				SELECT 
					blogposts.blog_id, blogposts.title, blogposts.content, blogposts.tags, blogposts.timestamp, blogposts.image_url
				FROM 
					blogposts
				WHERE
					 blogposts.blog_id = blogposts.blog_id
					 AND blogposts.tags = :tags
				ORDER BY 
					blog_id DESC
				');
			$stmt->execute(array(':tags' => $row['tags']));
			while($row = $stmt->fetch()){
				
				echo '<div>';
					echo '<h1><a href="'.$row['tags'].'">'.$row['title'].'</a></h1>';
					echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['timestamp'])).' in ';

						$stmt2 = $db->prepare('SELECT title, tags	FROM blogposts WHERE blogposts.blog_id = blogposts.blog_id AND blogposts.tags = :tags');
						$stmt2->execute(array(':blog_id' => $row['blog_id']));

						$catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

						$links = array();
						foreach ($tags as $tag)
						{
						    $links[] = "<a href='c-".$tag['tags']."'>".$cat['catTitle']."</a>";
						}
						echo implode(", ", $links);

					echo '</p>';
					echo '<p>'.$row['postDesc'].'</p>';				
					echo '<p><a href="'.$row['postSlug'].'">Read More</a></p>';				
				echo '</div>';

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}

		?>

	</div>


</body>
</html>