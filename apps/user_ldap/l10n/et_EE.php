<?php $TRANSLATIONS = array(
"Failed to clear the mappings." => "Vastendususte puhastamine ebaõnnestus.",
"Failed to delete the server configuration" => "Serveri seadistuse kustutamine ebaõnnestus",
"The configuration is valid and the connection could be established!" => "Seadistus on korrektne ning ühendus on olemas!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Seadistus on korrektne, kuid ühendus ebaõnnestus. Palun kontrolli serveri seadeid ja ühenduseks kasutatavaid kasutajatunnuseid.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "Seadistus on vigane. Palun vaata ownCloud logist täpsemalt.",
"Deletion failed" => "Kustutamine ebaõnnestus",
"Take over settings from recent server configuration?" => "Võta sätted viimasest serveri seadistusest?",
"Keep settings?" => "Säilitada seadistused?",
"Cannot add server configuration" => "Ei suuda lisada serveri seadistust",
"mappings cleared" => "vastendused puhastatud",
"Success" => "Korras",
"Error" => "Viga",
"Connection test succeeded" => "Ühenduse testimine õnnestus",
"Connection test failed" => "Ühenduse testimine ebaõnnestus",
"Do you really want to delete the current Server Configuration?" => "Oled kindel, et tahad kustutada praegust serveri seadistust?",
"Confirm Deletion" => "Kinnita kustutamine",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Hoiatus:</b>PHP LDAP moodul pole paigaldatud ning LDAP kasutamine ei ole võimalik. Palu oma süsteeihaldurit see paigaldada.",
"Server configuration" => "Serveri seadistus",
"Add Server Configuration" => "Lisa serveri seadistus",
"Host" => "Host",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Sa ei saa protokolli ära jätta, välja arvatud siis, kui sa nõuad SSL-ühendust. Sel juhul alusta eesliitega ldaps://",
"Base DN" => "Baas DN",
"One Base DN per line" => "Üks baas-DN rea kohta",
"You can specify Base DN for users and groups in the Advanced tab" => "Sa saad kasutajate ja gruppide baas DN-i määrata lisavalikute vahekaardilt",
"User DN" => "Kasutaja DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "Klientkasutaja DN, kellega seotakse, nt. uid=agent,dc=näidis,dc=com. Anonüümseks ligipääsuks jäta DN ja parool tühjaks.",
"Password" => "Parool",
"For anonymous access, leave DN and Password empty." => "Anonüümseks ligipääsuks jäta DN ja parool tühjaks.",
"User Login Filter" => "Kasutajanime filter",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Määrab sisselogimisel kasutatava filtri. %%uid asendab sisselogimistegevuses kasutajanime.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "kasuta %%uid kohatäitjat, nt. \"uid=%%uid\"",
"User List Filter" => "Kasutajate nimekirja filter",
"Defines the filter to apply, when retrieving users." => "Määrab kasutajaid hankides filtri, mida rakendatakse.",
"without any placeholder, e.g. \"objectClass=person\"." => "ilma ühegi kohatäitjata, nt. \"objectClass=person\".",
"Group Filter" => "Grupi filter",
"Defines the filter to apply, when retrieving groups." => "Määrab gruppe hankides filtri, mida rakendatakse.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "ilma ühegi kohatäitjata, nt. \"objectClass=posixGroup\".",
"Connection Settings" => "Ühenduse seaded",
"Configuration Active" => "Seadistus aktiivne",
"When unchecked, this configuration will be skipped." => "Kui märkimata, siis seadistust ei kasutata",
"Port" => "Port",
"Backup (Replica) Host" => "Varuserver",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Lisa täiendav LDAP/AD server, mida replikeeritakse peaserveriga.",
"Backup (Replica) Port" => "Varuserveri (replika) port",
"Disable Main Server" => "Ära kasuta peaserverit",
"Use TLS" => "Kasuta TLS-i",
"Do not use it additionally for LDAPS connections, it will fail." => "LDAPS puhul ära kasuta. Ühendus ei toimi.",
"Case insensitve LDAP server (Windows)" => "Mittetõstutundlik LDAP server (Windows)",
"Turn off SSL certificate validation." => "Lülita SSL sertifikaadi kontrollimine välja.",
"Not recommended, use for testing only." => "Pole soovitatav, kasuta ainult testimiseks.",
"Cache Time-To-Live" => "Puhvri iga",
"in seconds. A change empties the cache." => "sekundites. Muudatus tühjendab vahemälu.",
"Directory Settings" => "Kataloogi seaded",
"User Display Name Field" => "Kasutaja näidatava nime väli",
"Base User Tree" => "Baaskasutaja puu",
"One User Base DN per line" => "Üks kasutajate baas-DN rea kohta",
"User Search Attributes" => "Kasutaja otsingu atribuudid",
"Optional; one attribute per line" => "Valikuline; üks atribuut rea kohta",
"Group Display Name Field" => "Grupi näidatava nime väli",
"Base Group Tree" => "Baasgrupi puu",
"One Group Base DN per line" => "Üks grupi baas-DN rea kohta",
"Group Search Attributes" => "Grupi otsingu atribuudid",
"Group-Member association" => "Grupiliikme seotus",
"Special Attributes" => "Spetsiifilised atribuudid",
"Quota Field" => "Mahupiirangu atribuut",
"Quota Default" => "Vaikimisi mahupiirang",
"in bytes" => "baitides",
"Email Field" => "Email atribuut",
"User Home Folder Naming Rule" => "Kasutaja kodukataloogi nimetamise reegel",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Kasutajanime (vaikeväärtus) kasutamiseks jäta tühjaks. Vastasel juhul määra LDAP/AD omadus.",
"Internal Username" => "Sisemine kasutajanimi",
"Internal Username Attribute:" => "Sisemise kasutajatunnuse atribuut:",
"Override UUID detection" => "Tühista UUID tuvastus",
"UUID Attribute:" => "UUID atribuut:",
"Username-LDAP User Mapping" => "LDAP-Kasutajatunnus Kasutaja Vastendus",
"Clear Username-LDAP User Mapping" => "Puhasta LDAP-Kasutajatunnus Kasutaja Vastendus",
"Clear Groupname-LDAP Group Mapping" => "Puhasta LDAP-Grupinimi Grupp Vastendus",
"Test Configuration" => "Testi seadistust",
"Help" => "Abiinfo"
);
