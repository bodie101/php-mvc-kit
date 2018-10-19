use containerdb;

CREATE TABLE IF NOT EXISTS tbl_emails (

    ID INT(11) AUTO_INCREMENT,
    EMAIL VARCHAR(20) NOT NULL,
    MSG VARCHAR(30) NOT NULL,   
    PRIMARY KEY (ID)
) AUTO_INCREMENT = 1;

INSERT INTO tbl_emails (EMAIL, MSG) VALUES ('tweety@acme.com', 'I taw I taw a putty that');
INSERT INTO tbl_emails (EMAIL, MSG) VALUES ('tom@acme.com', 'cat noises');
INSERT INTO tbl_emails (EMAIL, MSG) VALUES ('jerry@acme.com', 'mouse runs');

-- use containerdb;

-- SELECT * FROM tbl_emails;