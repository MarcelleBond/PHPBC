SELECT
    `db_mbond`.`user_card`.`last_name`,
    `db_mbond`.`user_card`.`first_name`,
    DATE_FORMAT(`db_mbond`.`user_card`.`birthdate`, '%Y/%m/%d') AS 'birthdate'
FROM
    `db_mbond`.`user_card`
WHERE
    YEAR(`db_mbond`.`user_card`.`birthdate`) = 1989
ORDER BY
    `db_mbond`.`user_card`.`last_name` ASC

