--------------------------------------------------

**Dieses Projekt wird nicht weiter gepflegt.**  
Falls du es übernehmen und weiterentwickeln möchtest, [gib uns gerne bescheid](https://twitter.com/_DECAF)!

--------------------------------------------------

.  


# [CustomPrio](http://www.redaxo.org/de/download/addons/?addon_id=840)

**Verändert die Priorität neuer Artikel oder Ordner. Statt des Standardwerts 100/MAX kann z.B. 1 verwendet werden, um neue Artikel oben einzuhängen.**

Frei konfigurierbar mittels ini-Datei: Ordner-ID, Prio für neue Ordner, Prio für neue Artikel, Vererbung ja/nein.

Standardverhalten bei Aktivierung des Addons: Ausgehend von der ersten Ebene erhalten neue Ordner Prio 100/MAX (REDAXO-Standard), neue Artikel erhalten Prio 2, stehen also oben unmittelbar hinter dem Startartikel des Ordners.

*Technischer Hinweis: Die Anpassung der Prio erfolgt per JavaScript. Dies muss also beim Benutzer aktiviert sein, damit das Addon funktioniert.*

---

#### English

Changes the priority (Prio) of new articles or categories. Instead of 100/MAX as the default value, you can set your own default priorities. After installation of the addon new articles will get the priority of 2, categories are unchanged at 100/MAX.

Configuration is stored in an ini file. You can define custom prios for any categories, restricted or inherited. The default priority is set with jQuery, so JavaScript has to be activated on the client side.
