UPDATE
    `db_mbond`.`ft_table`
SET
   `db_mbond`.`ft_table`.`creation_date` = DATE_ADD(
        `db_mbond`.`ft_table`.`creation_date`,
        INTERVAL 20 YEAR
    )
WHERE
    `db_mbond`.`ft_table`.`id` >= 6;
