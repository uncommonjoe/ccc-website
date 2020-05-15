CREATE TABLE wp_service_attendees (
    `id` INT(10) AUTO_INCREMENT PRIMARY KEY,
    `firstService` int(100) COLLATE utf8_unicode_ci NOT NULL,
    `secondService` int(100) COLLATE utf8_unicode_ci NOT NULL
);

CREATE TABLE `wp_service_attendees` (
    `id` INT(5) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `email` VARCHAR(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `firstService` INT(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 0,
    `secondService` INT(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 0
);
SET GLOBAL event_scheduler = ON;



-- Use this chunk to clear and reset values to 0
DROP TABLE `wp_service_attendees`;
CREATE TABLE `wp_service_attendees` (
    `id` INT(5) AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `email` VARCHAR(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
    `firstService` INT(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 0,
    `secondService` INT(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 0
);
INSERT INTO `wp_service_attendees`(`id`, `firstService`, `secondService`) VALUES (1,0,0);
SELECT * FROM `wp_service_attendees` WHERE 1;


SELECT SUM(firstService), SUM(secondService) FROM `wp_service_attendees` WHERE 1;


INSERT INTO `wp_service_attendees`(`id`, `firstService`, `secondService`) VALUES (1,0,0)

INSERT INTO `wp_service_attendees` (name, email, firstService) VALUES ('Joe', 'uncommonjoe@gmail.com',  56);

UPDATE `wp_service_attendees` SET `firstService` = 90, `secondService` = 50 WHERE 1;
SELECT * FROM `wp_service_attendees` WHERE 1;



SELECT CURDATE() + INTERVAL 6 - weekday(CURDATE()) DAY AS Sunday;

