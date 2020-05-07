# BAP Pagination

In deze opdracht ga je proberen om zelf een werkende pagination (paginering) te maken.

``Pagination is het verdelen van veel gegevens over meerdere pagina's``

### Importeer de database
- Importeer eerst het bestand `bap_pagination.sql` in je database server (via phpMyAdmin bijvoorbeeld)
- Stel de juiste connectie gegevens in in `includes/config.php`

### Aan de slag
De code werkt nog niet, die moet werkend gemaakt worden door jou.

1. Lees de code in `index.php` eerst.
2. Volg de code en bekijk alle regels waar een `TODO` staat.
3. Op de plek van de `TODO` moet je zelf code schrijven, een berekening maken of een SQL query schrijven.

### Hulp
Bedenk goed hoe je ook alweer tot de juiste gegevens komt, [gebruik dit ter ondersteuning](http://bap.mediadeveloper.amsterdam/the-wall/pagination/).

- Totaal aantal rijen in een table tellen
- Aantal pagina's uitrekenen
- De juiste start (OFFSET) en aantal (LIMIT) opgeven in je query
- Bekijk goed wat de functie `getCountries()` teruggeeft en hoe je die informatie kunt gebruiken
- *Vraag hulp aan anderen waar nodig*

---
#### Commit en push alles naar Github, ook als je nog niet klaar bent

Veel succes!

---
### Voorbeeld eindresultaat
![Voorbeeld](images/voorbeeld_resultaat.jpg)

### Database

Dit zit er in de database
![Database](images/database.jpg)

Index.php
+ LIMIT = 10 geplaatst zodat je tijdens ontwikkeling niet hoeft blijven scrollen.
+ weergave via echo: de country-code, populatie, levens verwachting en de regio.
+ pagination nummering toegevoegd.


functions.php
+ query ophalen data aangepast zodat het start in Nederland
+ getest dat database connectie wordt gemaakt


style.CSS
+- .country: color #ffffff aangepast naar #000000 color van letters aangepast omdat dit in het wit stond, net als het achtergrond -> output nu wel zichtbaar
+achtergrond naar groen aangepast voor ieder 'land' dat wordt getoond


