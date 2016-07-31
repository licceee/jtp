<?php
	echo date('l jS \of F Y h:i:s A');
	print "<br> Das ist eine Probe<br>";
	$probe = ["Eins", 2, "Bla"];
	$probe[] = "Zwei"; //so kann man einen Wert einfach der Liste addieren 
	echo $probe; // Gibt String = "Array" aus - Inhalt wird nicht ausgegeben
	echo "<br> <br> ";
	echo "<pre>"; //Rückt ordentlich ein
	print_r($probe); //Zeigt was im Array steckt
	echo "</pre>";
	echo "<br> <br> ";
	var_dump($probe[1]); //gibt den Typen aus 
	var_dump($probe[0]); //bei String auch die Länge
	echo "<br> <br> ";
	foreach ($probe as $i) {
		echo "$i <br>\n";
	}
	echo "<br>";
	$anzahl = count($probe);
	echo "array enthält $anzahl werte<br>";
	echo "<br> <br> ";
	
	//Bilder in Random Reihenfolge anzeigen
	echo "<h3>Zufällige Bilder mit eigener Funktion : </h3><br><br>";
	$bilder = ["a.jpg", "b.jpg", "c.jpg", "d.jpg", "e.jpg"];
	$max = count($bilder)-1;
	$zufallszahl = rand(0, $max);
	echo "<img src='$bilder[$zufallszahl]' />";
	echo "<br> <br> ";
	//Zweite Variante mit Funktion array_rand($arrayname);
	echo "<h3>Zufällige Bilder mit array_rand() Funktion : </h3><br><br>";
	$zb1 = array_rand($bilder);
	echo "<img src='$bilder[$zb1]' />";
	echo "<br> <br> ";

	echo "<h3>Assoziative Arrays : </h3><br><br>";
	$farben = ["rot" => "#FF0000", "grün" => "#00FF00", "blau" => "#0000FF"];
	print_r($farben);
	echo "<br> <br> ";
	foreach ($farben as $name => $wert) {
		echo "Schlüssel: $name, Wert: $wert <br> \n";
	}
	echo "Die Farbe ist  {$farben['blau']}";
	echo "<br> <br> ";
?>



<!-- NOTIZEN
	if	(ISSET($_POST["user"]) && ! empty($_POST["user"])) //($_POST["user"] != "")		//|| check empty string options on Google??
		$ben = $_POST["user"]; //GET/POST methods needs to be uppercase
	else
		$ben = "Unknown user";
	echo "Username: <b>".$ben."</b>  ";

-->

