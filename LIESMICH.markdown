README
======

Addon: [CustomPrio](http://www.redaxo.de/180-0-addon-details.html?addon_id=840 "http://www.redaxo.de/180-0-addon-details.html?addon_id=840")
--------------------------------

Beschreibung
----------------

Ver&auml;ndert die Priorit&auml;t neuer Artikel oder Ordner. Statt des Standardwerts 100 kann z.B. 1 verwendet werden, um neue Artikel oben einzuh&auml;ngen.

Frei konfigurierbar mittels ini-Datei: Ordner-ID, Prio f&uuml;r neue Ordner, Prio f&uuml;r neue Artikel, Vererbung ja/nein.

Standardverhalten bei Aktivierung des Addons: Ausgehend von der ersten Ebene erhalten neue Ordner Prio 100 (REDAXO-Standard), neue Artikel erhalten Prio 2, stehen also oben unmittelbar hinter dem Startartikel des Ordners.

Technischer Hinweis: Die Anpassung der Prio erfolgt per JavaScript. Dies muss also beim Benutzer aktiviert sein, damit das Addon funktioniert.

Dieses Addon f&uuml;gt Javascript-Code zu den Kategorien Ihrer Wahl.

Changelog
---------

* **1.0.0:** 
  * Initial release
