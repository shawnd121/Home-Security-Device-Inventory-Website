CREATE TABLE HomeSecurityCategories (
    HomeSecurityCategoryID   INT(11)        NOT NULL,
    HomeSecurityCategoryCode VARCHAR(10)    NOT NULL UNIQUE,
    HomeSecurityCategoryName VARCHAR(255)   NOT NULL,
    AisleNumber              INT(11)        NOT NULL,
    DateCreated              DATETIME       NOT NULL,
    PRIMARY KEY (HomeSecurityCategoryID)
);

INSERT INTO HomeSecurityCategories
(HomeSecurityCategoryID, HomeSecurityCategoryCode, HomeSecurityCategoryName, AisleNumber, DateCreated)
VALUES
(100, 'SDL', 'Smart Door Locks', 1, NOW()),
(200, 'SCS', 'Security Camera Systems', 2, NOW()),
(300, 'MSL', 'Motion Sensor Lights', 3, NOW()),
(400, 'VDB', 'Video Doorbells', 4, NOW()),
(500, 'WA', 'Window Alarms', 5, NOW());
