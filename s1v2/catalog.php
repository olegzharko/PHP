<?php 
include("inc/data.php");
include("inc/function.php");

$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"]))
{
	if ($_GET["cat"] == "books")
	{
		$pageTitle = "Books";
		$section = "books";
	}
	else if ($_GET["cat"] == "movies")
	{
		$pageTitle = "Movies";
		$section = "movies";
	}
	else if ($_GET["cat"] == "music")
	{
		$pageTitle = "Music";
		$section = "music";
	}
}

include("inc/header.php"); ?>

<div class="section catalog page">
	<div class="wrapper">
		<h1><?php 
		if ($section != null)
		{
			echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
		}
		echo $pageTitle; ?></h1>

		<ul class="items">
			<?php
			if ($section != null)
			{
				$categories = array_category($catalog, $section);
				foreach($categories as $id) {
					echo get_item_html($id, $catalog[$id]);
				}
			}
			else
			{
				// $random = array_rand($catalog, 8);
				// // var_dump($random);
				foreach($catalog as $id => $item) {
					echo get_item_html($id, $catalog[$id]);
				}
			}
			?>
		</ul>

	</div>
</div>

<?php inlude("inc/footer.php") ?>