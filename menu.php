<ul id="topmenu">
	<li><strong> Artikelen</strong> &#9660;
		<ul>
			<li><a href="./"> Alle artikelen</a></li>
			<li><a href="./top.php"> Populiare artikelen</a></li>
			<li><a href="./top.php?mode=week"> Populiare artikelen (deze week)</a></li>
			<li><a href="./top.php?mode=day"> Populiare artikelen (vandaag)</a></li>
			<li><a href="./top.php?mode=hour"> Populiare artikelen (dit uur)</a></li>
			<li><a href="./charts.php"> Grafiekje </a></li>
		</ul>
	</li>
	<li><strong> Auteurs</strong> &#9660;
		<ul>
			<?php
$r = mysql_query('select * from meta where meta.type = "article:author" order by waarde');
while($row = mysql_fetch_array($r))
{
?>
				<li><a href="./meta_art.php?id=<?php echo $row['ID']?>"><div><?php echo $row['waarde'] ?></div></a></li>
<?php
}
?>
		</ul>
	</li>
	<li><strong> Secties</strong> &#9660;
		<ul>
<?php
$r = mysql_query('select * from meta where meta.type = "article:section" order by waarde');
while($row = mysql_fetch_array($r))
{
?>
				<li><a href="./meta_art.php?id=<?php echo $row['ID']?>"><div><?php echo $row['waarde'] ?></div></a></li>
<?php
}
?>
		</ul>
	</li>
</ul>