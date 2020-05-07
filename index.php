<?php
include 'includes/functions.php';
$connection = dbConnect();

// Standaard pagina = 1
$page = 1;


if ( isset( $_GET['page'] ) ) {
	// Tenzij in de url een page paramater staat, dan die waarde gebruiken
	$page = (int) $_GET['page'];
}

//TODO: Hoeveel resultaten per pagina wil je?
$pagesize = 10;
$result = getCountries( $connection, $page, $pagesize );
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="author" content="Leroy Andrade">
    <title>Countries Bap periode 4</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<section class="countries">
		<?php foreach ( $result['statement'] as $country ): ?>
			<div class="country">
					<!--TODO: Laat hier andere gegevens van een land zien uit de "country" table
					In het volgende heb ik overgenomen, wat in uw voorbeeld staat zodat ik een target heb
					en onnodig extra tijd niet meer besteed-->

						<h2><?php echo $country['name'] 																							?>
							<span class="country-code">			<?php echo $country['code'] 								?></span> </h2>
							  <article>Population&#58; 			<?php echo $country['population'] 					?><br/>
								Levensverwachting&#58; 				<?php echo $country['life_expectancy'] 			?>
								<article>
						<h2>															<?php echo $country['region'] 							?></h2>
			</div>
		<?php endforeach ?>


	</section>
<div class="pagination">
	<?php for ( $i = 1; $i <= $result['pages']; $i ++ ): ?>
        <a href="index.php?page=<?php echo $i; ?>" name="page" class="pagination__number"><?php echo $i; ?></a>
	<?php endfor; ?>
	<?php echo $result['page']; ?>
</div>
</body>
</html>
