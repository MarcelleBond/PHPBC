SELECT
    `db_mbond`.`cinema`.`floor_number` AS `floor`,
    SUM(`db_mbond`.`cinema`.`nb_seats`) AS `seats`
FROM
    `db_mbond`.`cinema`
 GROUP BY
	`db_mbond`.`cinema`.`floor_number`
ORDER BY
    `seats`
ASC
