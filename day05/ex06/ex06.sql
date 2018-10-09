SELECT
    `db_mbond`.`film`.`title`,
    `db_mbond`.`film`.`summary`,
    `db_mbond`.`film`.`id_film`
FROM
	`db_mbond`.`film`
WHERE
    `db_mbond`.`film`.`summary` LIKE BINARY '%Vincent%'
ORDER BY
    `db_mbond`.`film`.`id_film` ASC
