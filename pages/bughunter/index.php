<?php

define("FILE", "./pages/$name/hunters.json");

define("URL", "http://37.57.170.70");

$i = 1;

$headers = @get_headers(URL);
$httpCode = explode(' ', $headers[0]);

if($httpCode[1] == 200) {

	$hunters = json_decode(file_get_contents(URL), TRUE);
	arsort($hunters);

	file_put_contents(FILE, json_encode($hunters));

} else {
	$hunters = json_decode(file_get_contents(FILE), TRUE);
}

?>

    <header>

      <h1>Bug Hunters</h1>

			<ul class="rules">
				<li>R<span>reject</span></li>
				<li>m<span>minor</span></li>
				<li>N<span>normal</span></li>
				<li>M<span>major</span></li>
				<li>S<span>Score</span></li>
			</ul>

    </header>

    <section id="bughunter_tab">
			<div class="hunter tablet">
				<span class="rating_place"></span>
				<span class="hunter_name"></span>
				<span class="hunter_reject">R</span>
				<span class="hunter_minor">m</span>
				<span class="hunter_normal">N</span>
				<span class="hunter_major">M</span>
				<span class="hunter_score">S</span>
			</div>
<?php

foreach ($hunters as $key => $value) {

	if ($i < 3) {
		$rating_place = "topgamer";
	} else {
		$rating_place = " ";
	}

  echo "<div class='hunter'>";
  echo "<span class='rating_place $rating_place'>$i</span>";
	echo "<span class='hunter_name'><a href='https://t.me/$key'>$key</a></span>";
	echo "<span class='hunter_reject'>".$value['reject']."</span>";
	echo "<span class='hunter_minor'>".$value['minor']."</span>";
	echo "<span class='hunter_normal'>".$value['normal']."</span>";
  echo "<span class='hunter_major'>".$value['major']."</span>";
  echo "<span class='hunter_score'>".$value['score']."</span>";
  echo "</div>";

  $i++;
}

?>
    </section>

		<footer>
			<div class="author"><a href="https://t.me/helsis">Create by: @Helsis <i>&#10084;</i></a></div>
		</footer>

		<link rel="stylesheet" href="/css/bughunter.css">

  </body>
</html>