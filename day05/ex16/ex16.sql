SELECT
    COUNT(DISTINCT `db_mbond`.`member`.`id_member`) AS `movies`
FROM
    `db_mbond`.`member`
WHERE
    `db_mbond`.`member`.`date_last_film` BETWEEN '2006-10-30 00:00:00' AND '2007-07-27 00:00:00' OR(
        MONTH(`db_mbond`.`member`.`date_last_film`) = 12 AND DAY(`db_mbond`.`member`.`date_last_film`) = 24
    )
