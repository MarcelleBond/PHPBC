SELECT
   `db_mbond`.`film`.`title` AS Title,
   `db_mbond`.`film`.`summary` AS Summary,
   `db_mbond`.`film`.`prod_year`
FROM
    `db_mbond`.`film`
WHERE
    `db_mbond`.`film`.`id_genre` = '25'
ORDER BY
   `db_mbond`.`film`.`prod_year`
DESC
