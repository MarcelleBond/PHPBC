INSERT INTO `db_mbond`.`ft_table`(`login`, `creation_date`, `group`)
SELECT
  `db_mbond`.`user_card`.`last_name`,
  `db_mbond`.`user_card`.`birthdate`,
  'other'
FROM
  `db_mbond`.`user_card`
WHERE
  `db_mbond`.`user_card`.`last_name` LIKE "%a%" AND LENGTH(
      `db_mbond`.`user_card`.`last_name`
  ) <= 8
ORDER BY
  `db_mbond`.`user_card`.`last_name` ASC
LIMIT 10
