DROP DATABASE oefen;

CREATE DATABASE oefen;

USE oefen;

CREATE TABLE tafel (
  tafel_ID INT NOT NULL AUTO_INCREMENT,
  tafelnummer INT NOT NULL,
  PRIMARY KEY(tafel_ID)
);

CREATE TABLE reservatie (
  reservatie_ID INT NOT NULL AUTO_INCREMENT,
  datum DATE NOT NULL,
  tijd DATETIME NOT NULL,
  klantnaam VARCHAR(255) NOT NULL,
  telefoonnummer INT NOT NULL,
  aantal INT NOT NULL,
  tafel_ID INT NOT NULL,
  FOREIGN KEY (tafel_ID) REFERENCES tafel(tafel_ID),
  PRIMARY KEY(reservatie_ID)
);


CREATE TABLE voorgerechten (
  voorgerechten_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs DECIMAL(4,2) NOT NULL,
  omschrijving VARCHAR(255) NOT NULL,
  PRIMARY KEY(voorgerechten_ID)
  );


CREATE TABLE hoofdgerechten (
  hoofdgerechten_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs DECIMAL(4,2) NOT NULL,
  omschrijving VARCHAR(255) NOT NULL,
  PRIMARY KEY(hoofdgerechten_ID)
  );

CREATE TABLE taart_dessert (
  taart_dessert_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs DECIMAL(4,2) NOT NULL,
  omschrijving VARCHAR(255) NOT NULL,
  PRIMARY KEY(taart_dessert_ID)
  );

CREATE TABLE vooral_voor_de_kleintjes (
  vooral_voor_de_kleintjes_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs DECIMAL(4,2) NOT NULL,
  omschrijving VARCHAR(255) NOT NULL,
  PRIMARY KEY(vooral_voor_de_kleintjes_ID)
  );


CREATE TABLE eten (
  eten_ID INT NOT NULL AUTO_INCREMENT,
  voorgerechten_ID INT NOT NULL,
  hoofdgerechten_ID INT NOT NULL,
  taart_dessert_ID INT NOT NULL,
  vooral_voor_de_kleintjes_ID INT NOT NULL,
  PRIMARY KEY(eten_ID),
    FOREIGN KEY (voorgerechten_ID) REFERENCES voorgerechten (voorgerechten_ID),
    FOREIGN KEY (hoofdgerechten_ID) REFERENCES hoofdgerechten (hoofdgerechten_ID),
    FOREIGN KEY (taart_dessert_ID) REFERENCES taart_dessert (taart_dessert_ID),
    FOREIGN KEY (vooral_voor_de_kleintjes_ID) REFERENCES vooral_voor_de_kleintjes (vooral_voor_de_kleintjes_ID)
  );

CREATE TABLE koffie_thee (
  koffie_thee_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs_per_stuk DECIMAL(4,2) NOT NULL,
  PRIMARY KEY(koffie_thee_ID)
  );

CREATE TABLE frisdranken (
  frisdranken_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs_per_stuk DECIMAL(4,2) NOT NULL,
  PRIMARY KEY(frisdranken_ID)
  );

CREATE TABLE mineraalwaters (
  mineraalwaters_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs_per_stuk DECIMAL(4,2) NOT NULL,
  PRIMARY KEY(mineraalwaters_ID)
  );

CREATE TABLE huiswijnen (
  huiswijnen_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs_per_stuk DECIMAL(4,2) NOT NULL,
  PRIMARY KEY(huiswijnen_ID)
  );

CREATE TABLE witte_wijnen (
  witte_wijnen_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs_per_stuk DECIMAL(4,2) NOT NULL,
  PRIMARY KEY(witte_wijnen_ID)
  );

CREATE TABLE rode_wijnen (
  rode_wijnen_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs_per_stuk DECIMAL(4,2) NOT NULL,
  PRIMARY KEY(rode_wijnen_ID)
  );

CREATE TABLE rose (
  rose_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs_per_stuk DECIMAL(4,2) NOT NULL,
  PRIMARY KEY(rose_ID)
  );

CREATE TABLE bieren_van_de_tap (
  bieren_van_de_tap_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs_per_stuk DECIMAL(4,2) NOT NULL,
  PRIMARY KEY(bieren_van_de_tap_ID)
  );

CREATE TABLE special_flesbier (
  special_flesbier_ID INT NOT NULL AUTO_INCREMENT,
  naamproduct VARCHAR(255) NOT NULL,
  prijs_per_stuk DECIMAL(4,2) NOT NULL,
  PRIMARY KEY(special_flesbier_ID)
  );

CREATE TABLE dranken (
  dranken_ID INT NOT NULL AUTO_INCREMENT,
  koffie_thee_ID INT NOT NULL,
  frisdranken_ID INT NOT NULL,
  mineraalwaters_ID INT NOT NULL,
  huiswijnen_ID INT NOT NULL,
  witte_wijnen_ID INT NOT NULL,
  rode_wijnen_ID INT NOT NULL,
  rose_ID INT NOT NULL,
  bieren_van_de_tap_ID INT NOT NULL,
  special_flesbier_ID INT NOT NULL,
  PRIMARY KEY(dranken_ID),
    FOREIGN KEY (koffie_thee_ID) REFERENCES koffie_thee(koffie_thee_ID),
    FOREIGN KEY (frisdranken_ID) REFERENCES frisdranken(frisdranken_ID),
    FOREIGN KEY (mineraalwaters_ID) REFERENCES mineraalwaters(mineraalwaters_ID),
    FOREIGN KEY (huiswijnen_ID) REFERENCES huiswijnen(huiswijnen_ID),
    FOREIGN KEY (witte_wijnen_ID) REFERENCES witte_wijnen(witte_wijnen_ID),
    FOREIGN KEY (rode_wijnen_ID) REFERENCES rode_wijnen(rode_wijnen_ID),
    FOREIGN KEY (rose_ID) REFERENCES rose(rose_ID),
    FOREIGN KEY (bieren_van_de_tap_ID) REFERENCES bieren_van_de_tap(bieren_van_de_tap_ID),
    FOREIGN KEY (special_flesbier_ID) REFERENCES special_flesbier(special_flesbier_ID)
);

CREATE TABLE bon (
  bon_ID INT NOT NULL AUTO_INCREMENT,
  aantal INT NOT NULL,
  totaal DECIMAL(4,2) NOT NULL,
  totaalprijs DECIMAL(4,2) NOT NULL,
  dranken_ID INT NOT NULL,
  eten_ID INT NOT NULL,
  tafel_ID INT NOT NULL,
  PRIMARY KEY(bon_ID),
    FOREIGN KEY (dranken_ID) REFERENCES dranken (dranken_ID),
    FOREIGN KEY (eten_ID) REFERENCES eten (eten_ID),
    FOREIGN KEY (tafel_ID) REFERENCES tafel (tafel_ID)
);
