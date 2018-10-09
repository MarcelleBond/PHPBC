SELECT
    REVERSE(
    INSERT
        (
            `db_mbond`.`distrib`.`phone_number`,
            1,
            1,
            ''
        )
) AS rebmunenohp FROM
     `db_mbond`.`distrib`
	 WHERE
	 `db_mbond`.`distrib`.`phone_number` LIKE "05%"

