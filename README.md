# 1. Übung - Einführung
### Schuljahr 24/25
### Lehrgang 2
### Übungstag 20.11.2024
### Tobias Kügerl
### Gruppe B

# Aufgabenstellung

- Zwei Tankfüllungen (liter1=40.5, liter2=35.7) mit dem gleichen Literpreis (preis=1.499) sind zu multiplizieren und als Kosten (kosten) in einem Aussagesatz anzuzeigen.
- Dafür wird im 1. Teil die Kostenermittlung durchgeführt.
- Im 2. Teil wird bei der Ergebnisanzeige eine Zeichenkette durch Verbindung aus: Der Zeichenkette "Die Benzinkosten betragen für ", der Addition der Variablen liter1 + liter2, der Zeichenkette "Liter ", der Variablen kosten und der Zeichenkette "€" gebildet.

- ERWEITERUNG: Dateneingabemöglichkeiten recherchieren (POST/GET Variablen mittels HTML Formularen)
# Lösung
- Eine Test PHP Datei, auf das htdocs Verzeichnis kopieren und tester.
![Picture not found](./images/PHP-Test.png)
![Picture not found](./images/PHP-Apache-Test.png)

- Die Tanfüllung Aufgabe.
![Picture not found](./images/TankCode.png)
![Picture not found](./images/TankAnzeige.png)

## Fragen

### Kommunikationsablauf – Webserver und Client/Browser
- Anfrage: Der Browser sendet eine HTTP(S)-Anfrage an den Webserver.
- Verarbeitung: Der Webserver bearbeitet die Anfrage und leitet sie ggf. an PHP/Datenbank weiter.
- Antwort: Der Server liefert die generierte HTML-/JSON-Antwort zurück.
- Anzeige: Der Browser rendert die Inhalte für den Nutzer.
### Installation der Entwicklungsumgebung
- Webserver: Installiere Apache, Nginx oder XAMPP/WAMP/MAMP.
- PHP: Installiere PHP und teste mit phpinfo().
- Datenbank: Nutze MySQL/MariaDB (z. B. über phpMyAdmin).
- Editor: Verwende Visual Studio Code, PhpStorm oder Sublime Text.
### Sicherheitsrisiken von Webanwendungen
- Phishing: Falsche Webseiten täuschen Nutzer.
- SQL Injections: Manipulation der Datenbank durch unsichere Eingaben.
- XSS: Einfügen von schädlichem JavaScript.
- Session-Hijacking: Diebstahl von Sitzungsdaten.
- DoS: Überlastung des Servers.
### Maßnahmen zum Schutz
- Verschlüsselung: Einsatz von HTTPS (TLS/SSL) für sichere Datenübertragung.
- Authentifizierung: Nutzung von Multifaktor-Authentifizierung (MFA).
- Eingabesicherung: Input-Sanitizing und parametrisierte Queries gegen SQL-Injection.
- Zugriffsbeschränkung: Prinzip der minimalen Rechte und Rate Limiting.
- Updates: Regelmäßige Aktualisierung von Software und Bibliotheken.
