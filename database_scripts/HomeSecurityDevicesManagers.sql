/*  Shawn Daniel
    10/5/24
    IT202-003
    Phase 1 Assignment: Login and Logout
    sd2257@njit.edu
*/
CREATE TABLE HomeSecurityDevicesManagers (
 HomeSecurityDevicesManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
  pronouns               VARCHAR(60)    NOT NULL,
  firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (HomeSecurityDevicesManagerID)
 );

 INSERT INTO HomeSecurityDevicesManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('john@book.com', SHA2('P@ssword', 256), 'He/Him', 'John', 'Doe', NOW());

INSERT INTO HomeSecurityDevicesManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('jane@mail.com', SHA2('myP@ssword', 256), 'She/Her', 'Jane', 'Marie', NOW());

INSERT INTO HomeSecurityDevicesManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('bob@net.com', SHA2('Pass123', 256), 'He/Him', 'Bob', 'Swift', NOW());