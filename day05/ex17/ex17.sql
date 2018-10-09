SELECT
   COUNT(*) 'nb_susc',
   FLOOR(AVG(`db_mbond`.`subscription`.`price`)) 'av_susc',
   (SUM(`db_mbond`.`subscription`.`duration_sub`) % 42) 'ft'
FROM
   `db_mbond`.`subscription`;
