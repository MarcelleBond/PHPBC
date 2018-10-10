SELECT
	`db_mbond`.`user_card`.`last_name`,
	`db_mbond`.`user_card`.`first_name`
FROM
	`db_mbond`.`user_card`
INNER JOIN `db_mbond`.`member` ON `db_mbond`.`member`.`id_user_card` = `db_mbond`.`user_card`.`id_user`
WHERE
	`db_mbond`.`user_card`.`last_name` LIKE "%-%" OR `db_mbond`.`user_card`.`first_name` LIKE "%-%"
ORDER BY
	`db_mbond`.`user_card`.`last_name` ASC,
	`db_mbond`.`user_card`.`first_name` ASC
