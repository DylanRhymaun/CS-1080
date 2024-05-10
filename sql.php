<?php include 'top.php'; ?>
<main>
    <h2>List of Our Award Winning Photographers</h2>
    <pre>
CREATE TABLE tblBestPhotographers (
    photoYear int NOT NULL,
    photoTitle varchar(30) DEFAULT NULL,
    photoTaker varchar(30) DEFAULT NULL,
    photoLocation varchar(20) DEFAULT NULL,
    bearSpecies varchar(20) DEFAULT NULL
)
    </pre>
    <pre>
INSERT INTO tblBestPhotographers
(photoYear, photoTitle, photoTaker, photoLocation, bearSpecies)
VALUES
('2023', 'Playtime with mom', 'Dan Orr', 'Alaska', 'Brown Bear'),
('2022', 'Im Vegetarian', 'Jeff Fladen', 'Tennessee', 'Black Bear'),
('2021', 'Alaskan Summer', 'Kari Douglass', 'Alaska', 'Brown Bear'),
('2020', 'River Ursid', 'Rylee Jensen', 'Alaska', 'Brown Bear'),
('2019', 'A Tundra Stroll', 'Rylee Jensen', 'Alaska', 'Brown Bear')
    </pre>
    <h2>Submissions via form page</h2>
    <pre>
CREATE TABLE tblBearInterests (
pmkBearInterestsId INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
fldEmail VARCHAR(50) DEFAULT NULL,
fldRole VARCHAR (40) DEFAULT NULL,
fldComments TEXT, 
fldGrizzly TINYINT(1) DEFAULT NULL,
fldSun TINYINT(1) DEFAULT NULL,
fldAsiaticBlack TINYINT(1) DEFAULT NULL,
fldPets VARCHAR(20) DEFAULT NULL
)
    </pre>
</main>
<?php include 'footer.php'; ?>