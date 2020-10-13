SELECT *
FROM `countries`;

-- a little lazy, but works ;)
select * from countries;

SELECT *
FROM `countries`
WHERE `population` > 20000000;

SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population`; -- default ascending order

SELECT *
FROM `countries`
WHERE `population` > 20000000
ORDER BY `population`
LIMIT 10;