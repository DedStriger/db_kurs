CREATE PROCEDURE `food` (IN who INT, IN howMuch INT)
BEGIN
	UPDATE stern SET count=count-howMuch WHERE animal_id = who;
END