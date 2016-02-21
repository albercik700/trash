<?php
require_once "header.html.php";
echo "\n";
?>
	<center>Lista uzytkownikow</center>
	<pre>
	<?php print_r($this->data['users']) ?>
	</pre>
<?php
require_once "footer.html.php";
?>