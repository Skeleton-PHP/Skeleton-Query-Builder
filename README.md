# Query-Builder [![PHP Composer](https://github.com/Skeleton-PHP/Skeleton-Query-Builder/actions/workflows/php.yml/badge.svg)](https://github.com/Skeleton-PHP/Skeleton-Query-Builder/actions/workflows/php.yml)
Query-Builder is a MySQL based builder for quickly and easily building database strings for Skeleton-PHP,
and being able to implement these to pull information from a database.

### Imports to use when setting up your project.

`use SkeletonPHP\QueryBuilder;`
`use SkeletonPHP\Select;`


### INSERT INTO EXAMPLE TABLE
`$insertquery = (new QueryBuilder())
    ->insert('table_name')
    ->columns("1", "2", "3")
    ->values("4", "5", "6");`

### DELETE FROM TABLE EXAMPLE
`$deletequery = (new QueryBuilder())
->delete('table_name')
->from('table_name')
->where('table_name');`

### SELECT FROM TABLE EXAMPLE
`$selectquery = (new QueryBuilder())
    ->select('table_name')
    ->from('test')
    ->groupBy('test2')
    ->orderBy('test');`

### UPDATE FROM TABLE EXAMPLE
`$updatequery = (new QueryBuilder())
->update('table_name')
->from('table_name')
->where('table_name');`
