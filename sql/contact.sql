USE containerdb;

CREATE TABLE tbl_contact (
ID INT(11) NOT NULL AUTO_INCREMENT,
FNAME VARCHAR(255) NOT NULL,
LNAME VARCHAR(255) NOT NULL,
SUB VARCHAR(255) NOT NULL,
EMAIL VARCHAR(255) NOT NULL,
PRIMARY KEY(ID)
)   AUTO_INCREMENT = 1;


INSERT INTO tbl_contact (FNAME, LNAME, SUB, EMAIL) VALUES ('Marisa', 'Wadsworth', 'Subject', 'Email');
INSERT INTO tbl_contact (FNAME, LNAME, SUB, EMAIL) VALUES ('Marisa', 'Wadsworth', 'Subject', 'Email');
INSERT INTO tbl_contact (FNAME, LNAME, SUB, EMAIL) VALUES ('Marisa', 'Wadsworth', 'Subject', 'Email');
INSERT INTO tbl_contact (FNAME, LNAME, SUB, EMAIL) VALUES ('Marisa', 'Wadsworth', 'Subject', 'Email');
INSERT INTO tbl_contact (FNAME, LNAME, SUB, EMAIL) VALUES ('Marisa', 'Wadsworth', 'Subject', 'Email');

-- SELECT * FROM tbl_contact

-- DROP TABLE tbl_contact;