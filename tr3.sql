CREATE TRIGGER `buyStern` AFTER UPDATE ON `stern` FOR EACH ROW
BEGIN
DECLARE i INT;
DECLARE x INT;
DECLARE ch INT;
DECLARE nm VARCHAR(45);

SELECT COUNT(*) FROM stern into x;
SET i = 1;
WHILE i <= x DO
SELECT count FROM stern WHERE id = i into ch;
SELECT stern.name FROM stern WHERE id = i into nm;
if (ch <= 10) THEN 

INSERT INTO `buy`( `name`, `what`, `howMuch`, `data`) VALUES (CONCAT_WS(' ', 'buy',nm), nm, 100, UTC_DATE() );
END IF;
SET i=i+1;
END WHILE;
END