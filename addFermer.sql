CREATE PROCEDURE `addFermer` (IN name VARCHAR(45), IN b_name VARCHAR(45), IN c_name VARCHAR(45), IN a_name VARCHAR(45), IN a_count INT, IN s_name VARCHAR(45))
BEGIN
	DECLARE c_last INT;
    DECLARE b_last INT;
    DECLARE a_last INT;
    DECLARE s_last INT;
    SELECT id FROM cornfield ORDER BY id DESC LIMIT 1 into c_last;
    SELECT id FROM barn ORDER BY id DESC LIMIT 1 into b_last;
    SELECT id FROM animal ORDER BY id DESC LIMIT 1 into a_last;
	INSERT INTO `farmers` (`name`, `c_id`, `b_id`, `a_id`) VALUES (name, c_last+1, b_last+1, a_last+1);
    INSERT INTO `cornfield` (`id`,`name`) VALUES ( c_last+1, c_name);
    INSERT INTO `barn` (`id`,`name`) VALUES ( b_last+1, b_name);
    INSERT INTO `animal` (`id`,`name`,`count`,`c_id`, `b_id`) VALUES (a_last+1, a_name, a_count, c_last+1, b_last+1);
    INSERT INTO `stern` (`name` , `count`,`animal_id`) VALUES (s_name, 0, a_last+1);
    SELECT id FROM stern ORDER BY id DESC LIMIT 1 into s_last;
    UPDATE stern SET count = 1 WHERE id = s_last;
END