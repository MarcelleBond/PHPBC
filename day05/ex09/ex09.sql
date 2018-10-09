SELECT
   COUNT(`db_mbond`.`film`.`id_film`) AS 'nb_short-films'
FROM
    `db_mbond`.`film`
WHERE
    `db_mbond`.`film`.`duration` <= '42'
