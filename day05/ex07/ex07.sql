SELECT
    `db_mbond`.`film`.`title`,
    `db_mbond`.`film`.`summary`,
    `db_mbond`.`film`.`id_film`
FROM
	`db_mbond`.`film`
WHERE
    `db_mbond`.`film`.`summary` LIKE BINARY '%42%' OR `db_mbond`.`film`.`title` LIKE BINARY '%42%'
ORDER BY
    `db_mbond`.`film`.`duration` ASC
