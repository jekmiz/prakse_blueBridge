use darbinieki

CREATE TABLE Admins(
    logins varchar (100) PRIMARY KEY,
    parole varchar (100) NOT NULL
);

CREATE TABLE Team(
    ID int (10) PRIMARY KEY,
    VardsUzvards varchar (100) NOT NULL,
    Apraksts varchar (1000) NOT NULL
);

INSERT INTO Admins (logins, parole)
VALUES ("ImantsBerzins", "1234")

INSERT INTO Admins (logins, parole)
VALUES ("JanaRapse", "4321")

INSERT INTO Team (ID, VardsUzvards, Apraksts)
VALUES (1,"Janis", "Zobarsts ar 20 gadu pieredzi")
select parole from Admins where logins = "ImantsBerzins"
