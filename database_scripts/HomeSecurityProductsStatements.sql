CREATE TABLE HomeSecurityProducts (
    HomeSecurityProductID    INT(11)        NOT NULL,
    HomeSecurityProductCode  VARCHAR(10)    NOT NULL UNIQUE,
    HomeSecurityProductName  VARCHAR(255)   NOT NULL,
    HomeSecurityDescription  TEXT           NOT NULL,
    HomeSecurityModel        VARCHAR(255)   NOT NULL,
    HomeSecurityCategoryID   INT(11)        NOT NULL,
    WholesalePrice           DECIMAL(10,2)  NOT NULL,
    ListPrice                DECIMAL(10,2)  NOT NULL,
    DateCreated              DATETIME       NOT NULL,
    PRIMARY KEY (HomeSecurityProductID)
);

INSERT INTO HomeSecurityProducts
(HomeSecurityProductID, HomeSecurityProductCode, HomeSecurityProductName, HomeSecurityDescription, HomeSecurityModel, HomeSecurityCategoryID, WholesalePrice, ListPrice, DateCreated)
VALUES
(1000, 'SDL001', 'August Wi-Fi Smart Lock', 'A sleek, keyless smart lock with smartphone integration. Offers remote access and secure entry for your home.', 'August-2024', 100, 149.00, 199.00, NOW()),
(1001, 'SDL002', 'Yale Assure Lock 2', 'This versatile smart lock integrates with all major smart home platforms. It offers key-free entry and detailed activity monitoring.', 'YaleAssure2', 100, 169.00, 229.00, NOW()),
(1002, 'SDL003', 'Schlage Encode Plus', 'A premium lock that supports Apple HomeKit and NFC entry. Designed for modern security with advanced encryption.', 'EncodePlus', 100, 199.00, 279.00, NOW()),
(2000, 'SCS001', 'Ring Stick Up Cam', 'A versatile, wireless security camera with motion detection. It supports HD video and two-way audio.', 'RingCam2024', 200, 89.00, 129.00, NOW()),
(2001, 'SCS002', 'Arlo Pro 4', 'A weatherproof 2K security camera with color night vision. It is ideal for both indoor and outdoor monitoring.', 'ArloPro4', 200, 179.00, 249.00, NOW()),
(2002, 'SCS003', 'Google Nest Cam', 'An intelligent camera with facial recognition and HDR video. It integrates seamlessly with the Google ecosystem.', 'NestCam', 200, 169.00, 229.00, NOW()),
(3000, 'MSL001', 'Philips Hue Motion Sensor Light', 'A customizable motion sensor light with smart home integration. Ideal for enhancing security and energy savings.', 'HueMSL', 300, 59.00, 79.00, NOW()),
(3001, 'MSL002', 'LITOM Outdoor Light', 'This solar-powered motion light offers 270° wide-angle illumination. Built to withstand harsh weather conditions.', 'LITOM2024', 300, 29.00, 49.00, NOW()),
(3002, 'MSL003', 'LEONLITE LED Security Light', 'A dual-head LED light with adjustable motion sensors. It provides ultra-bright lighting for large outdoor areas.', 'LEONLITE-SL', 300, 79.00, 109.00, NOW()),
(4000, 'VDB001', 'Ring Video Doorbell 4', 'A wireless video doorbell with advanced motion detection. Offers 1080p video and pre-roll recording.', 'RingVDB4', 400, 129.00, 199.00, NOW()),
(4001, 'VDB002', 'Google Nest Doorbell', 'A stylish video doorbell with HDR imaging and AI-based notifications. Integrates with the Google smart home ecosystem.', 'NestVDB', 400, 179.00, 229.00, NOW()),
(4002, 'VDB003', 'Eufy Security Doorbell', 'This doorbell offers dual cameras for package and visitor monitoring. Features advanced AI for accurate alerts.', 'Eufy-Dual', 400, 149.00, 199.00, NOW()),
(5000, 'WA001', 'GE Personal Window Alarm', 'An easy-to-install alarm that activates when the window is opened. Perfect for dorms, homes, or apartments.', 'GEWA2024', 500, 12.00, 19.00, NOW()),
(5001, 'WA002', 'Doberman Ultra-Slim Alarm', 'A compact window alarm with a 100dB alert sound. It provides excellent deterrence against unauthorized entry.', 'Doberman2024', 500, 15.00, 25.00, NOW()),
(5002, 'WA003', 'Ring Alarm Contact Sensor', 'A smart sensor that integrates with the Ring Alarm system. Alerts you on your phone if the window or door is opened.', 'RingSensor', 500, 19.00, 29.00, NOW());
