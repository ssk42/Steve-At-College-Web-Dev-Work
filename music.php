<!DOCTYPE html>
<html>
	<!--
	Lab: PHP, Music Page
	-->

	<head>
		<title>Music Viewer</title>
		<meta charset="utf-8" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		
		<h1>My Music Page</h1>
		
		<!-- Number of Songs (Variables) -->
		<p>
			I love music.
			I have <?= $songs= count(glob("*.mp3"))?> total songs,
			which is over <?= $songs*.05 ?> hours of music!
		</p>

		<!-- Music Results Pages (Loops) -->
		<div class="section">
			<h2>Google's Music Results</h2>
		
			<ol>
				<?php
				for ($i=0; $i < 4; $i++) { 
					// $tag1="<li>";
					// $tag2='<a href=\"https://www.google.com/search?tbm=nws&amp;q=Music&amp;start='.$i*10.'>';
					// $tag3= $i*10.">"."Page ".$i
					// print($tag1.$tag2.$tag3.'</a></li>');
				 	print('<li>'.'<a href=\"https://www.google.com/search?tbm=nws&amp;q=Music&amp;start='.($i*10).">"."Page ".$i.'</a></li>');
				 } ?>
			</ol>
		</div>

		<!-- Favorite Artists (Arrays) -->
		<!-- Favorite Artists from a File (Files) -->
		<div class="section">
			<h2>My Favorite Artists</h2>
		
			<ol>
				<?=
					$artist= file("favorite.txt");
					foreach($artist as $artists) {
						print("<li> $artists</li>");
					}

				?>
			</ol>
		</div>
		
		<!-- Music (Multiple Files) -->
		<!-- MP3 Formatting -->
		<div class="section">
			<h2>My Music and Playlists</h2>

			<ul id="musiclist">
				<!-- Exercise 8: Playlists (Files) -->
				<li class="playlistitem">154-mix.m3u:
					
					<ul>
						
						<?=

							$songs= glob("*.mp3");


							
							
							foreach ($songs as $song) {
								print("$song");
								print("<audio controls>");
								print("<source src=$song type='audio/mpeg'> $song</source>");
								print("</audio> <br>");

							}
						?>
						
					</ul>
				
				</li>
			</ul>
		</div>
	</body>
</html>
