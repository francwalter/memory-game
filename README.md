# Fruit Matcher
HTML5, CSS3 and Javascript memory game.

Play this game on http://mmenavas.github.io/memory-game

# Memory

2023-06-23 ein online Memory Spiel von:

https://github.com/mmenavas/memory-game

Selbst geforkt (aber noch nichts eingepflegt) auf: 

https://github.com/francwalter/memory-game

Für mehre Bilder müssen diese (derzeit) in images/fruits/ rein und das CSS (MemoryGame.css) muss erweitert werden (selbsterklärend).
In BrowserInterface.js kann man die Anzahl der Memory Bilder setzen und auch die Zeit wie lange sie aufgedeckt sind. Siehe auch: ./gallery.md

Evtl. auch noch mal: https://thomaslawlor17.github.io/memory-game/ anschauen, für Multiplayer (bis 4). Das hier kann nur einen Spieler.

## Bilder

Mit dem Befehl auf Kommandozeile:

for i in `seq 1 5000`; do wget https://illustoon.com/photo/dl/$i.png; done

einen Batzen einfacher Bilder runtergeladen fuer Memory. Viel Schrott, aber ganz gute dazwischen. Dann noch mal 5001 bis 10000 geladen.
Bilder sind in: 

/var/www/7fw.de/memory/images/png

Bereits auf 35 Früchte Bilder aufgestockt und Code angepasst. 
Auch die Auswahl des Grid erweitert.

### Zahlen in Dateinamen Nullen voranstellen

Auf der Bash mit: 

    stellen=4; for f in *.png; do mv $f $(printf "%.${stellen}i\n" ${f%.*}).png; done;

kann man führende Nullen bei Zahlendateinamen auffüllen (9.jpg > 0009.jpg, 299.jpg > 0299.jpg, etc)


### PHP Gallery

Mit der einfachen PHP Gallery "PHP IMAGE GALLERY WITHOUT DATABASE" von:

https://code-boxx.com/simple-php-gallery-from-folder/
bzw:
https://gist.github.com/code-boxx/45a0c839ba499c4eacf01e008acd20cd#php-image-gallery-without-database

kann man die Bilder mit gallery.php oder gallery_caption.php (mit Namen) angezeigen.
Ordner der Bilder ist in der gallery.php anzupassen oder auch per Parameter zu übergeben, zB:

https://7fw.de/memory/gallery_caption.php?dir=png

zeigt dann die Bilder in images/png alle an.



