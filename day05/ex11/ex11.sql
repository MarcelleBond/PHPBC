SELECT
    UPPER(`db_mbond`.`user_card`.`last_name`) AS NAME,
    `db_mbond`.`user_card`.`first_name`,
    `db_mbond`.`subscription`.`price`
FROM
    `db_mbond`.`member`
INNER JOIN `db_mbond`.`user_card` ON `db_mbond`.`user_card`.`id_user` = `db_mbond`.`member`.`id_user_card`
INNER JOIN `db_mbond`.`subscription` ON `db_mbond`.`subscription`.`id_sub`= `db_mbond`.`member`.`id_sub`
WHERE
    `db_mbond`.`subscription`.`price` > 42
ORDER BY
    `db_mbond`.`user_card`.`last_name` ASC,
    `db_mbond`.`user_card`.`first_name` ASC
