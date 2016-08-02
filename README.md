# Recursive-And-Cluster-Array
PHP recursive and cluster multi dimentional nested array
![cluster-schema](http://gorkemduymaz.com/images/cluster.jpg)
```php
Array
(
    [0] => Array
        (
            [id] => 1
            [name] => Menu Item 1
            [menu_part_id] => 0
        )

    [1] => Array
        (
            [id] => 2
            [name] => Menu Item 2
            [menu_part_id] => 0
        )

    [2] => Array
        (
            [id] => 3
            [name] => Menu Item 3
            [menu_part_id] => 0
        )

    [3] => Array
        (
            [id] => 4
            [name] => Menu Item 1.1
            [menu_part_id] => 1
        )

    [4] => Array
        (
            [id] => 11
            [name] => Menu Item 1.2
            [menu_part_id] => 1
        )

    [5] => Array
        (
            [id] => 5
            [name] => Menu Item 2.1
            [menu_part_id] => 2
        )

    [6] => Array
        (
            [id] => 6
            [name] => Menu Item 3.1
            [menu_part_id] => 3
        )

    [7] => Array
        (
            [id] => 12
            [name] => Menu Item 3.2
            [menu_part_id] => 3
        )

    [8] => Array
        (
            [id] => 7
            [name] => Menu Item 1.1.1
            [menu_part_id] => 4
        )

    [9] => Array
        (
            [id] => 9
            [name] => Menu Item 2.1.1
            [menu_part_id] => 5
        )

    [10] => Array
        (
            [id] => 8
            [name] => Menu Item 1.1.1.1
            [menu_part_id] => 7
        )

    [11] => Array
        (
            [id] => 10
            [name] => Menu Item 1.1.1.1.1
            [menu_part_id] => 8
        )

    [12] => Array
        (
            [id] => 14
            [name] => Menu Item 2.1.1.1
            [menu_part_id] => 9
        )

    [13] => Array
        (
            [id] => 13
            [name] => Menu Item 2.1.1.2
            [menu_part_id] => 9
        )

)
```


```php
print_r(cluster);
```

```php
Array
(
    [0] => Array
        (
            [id] => 1
            [name] => Menu Item 1
            [menu_part_id] => 0
            [lft] => 1
            [rgt] => 12
            [depht] => 0
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 4
                            [name] => Menu Item 1.1
                            [menu_part_id] => 1
                            [lft] => 2
                            [rgt] => 9
                            [depht] => 1
                            [children] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 7
                                            [name] => Menu Item 1.1.1
                                            [menu_part_id] => 4
                                            [lft] => 3
                                            [rgt] => 8
                                            [depht] => 2
                                            [children] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [id] => 8
                                                            [name] => Menu Item 1.1.1.1
                                                            [menu_part_id] => 7
                                                            [lft] => 4
                                                            [rgt] => 7
                                                            [depht] => 3
                                                            [children] => Array
                                                                (
                                                                    [0] => Array
                                                                        (
                                                                            [id] => 10
                                                                            [name] => Menu Item 1.1.1.1.1
                                                                            [menu_part_id] => 8
                                                                            [lft] => 5
                                                                            [rgt] => 6
                                                                            [depht] => 4
                                                                        )

                                                                )

                                                        )

                                                )

                                        )

                                )

                        )

                    [1] => Array
                        (
                            [id] => 11
                            [name] => Menu Item 1.2
                            [menu_part_id] => 1
                            [lft] => 10
                            [rgt] => 11
                            [depht] => 1
                        )

                )

        )

    [1] => Array
        (
            [id] => 2
            [name] => Menu Item 2
            [menu_part_id] => 0
            [lft] => 13
            [rgt] => 22
            [depht] => 0
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 5
                            [name] => Menu Item 2.1
                            [menu_part_id] => 2
                            [lft] => 14
                            [rgt] => 21
                            [depht] => 1
                            [children] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 9
                                            [name] => Menu Item 2.1.1
                                            [menu_part_id] => 5
                                            [lft] => 15
                                            [rgt] => 20
                                            [depht] => 2
                                            [children] => Array
                                                (
                                                    [0] => Array
                                                        (
                                                            [id] => 14
                                                            [name] => Menu Item 2.1.1.1
                                                            [menu_part_id] => 9
                                                            [lft] => 16
                                                            [rgt] => 17
                                                            [depht] => 3
                                                        )

                                                    [1] => Array
                                                        (
                                                            [id] => 13
                                                            [name] => Menu Item 2.1.1.2
                                                            [menu_part_id] => 9
                                                            [lft] => 18
                                                            [rgt] => 19
                                                            [depht] => 3
                                                        )

                                                )

                                        )

                                )

                        )

                )

        )

    [2] => Array
        (
            [id] => 3
            [name] => Menu Item 3
            [menu_part_id] => 0
            [lft] => 23
            [rgt] => 28
            [depht] => 0
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 6
                            [name] => Menu Item 3.1
                            [menu_part_id] => 3
                            [lft] => 24
                            [rgt] => 25
                            [depht] => 1
                        )

                    [1] => Array
                        (
                            [id] => 12
                            [name] => Menu Item 3.2
                            [menu_part_id] => 3
                            [lft] => 26
                            [rgt] => 27
                            [depht] => 1
                        )

                )

        )

)
```
###### You can save lft,rgt and depth to database so you can easily access child rows with one sql and also you can adjust max and min depth.

#
#
```sql
select `id`, `name`, `parent_id`, `lft`, `rgt`, `depth` from `table` where `lft` >= ? and `lft` <= ? and `depth` < ?  order by `lft` asc
```
###### Getting between 2 and 8 
#
```php
Array
(
    [0] => Array
        (
            [id] => 4
            [name] => Menu Item 1.1
            [menu_part_id] => 1
            [lft] => 1
            [rgt] => 6
            [depth] => 0
            [children] => Array
                (
                    [0] => Array
                        (
                            [id] => 7
                            [name] => Menu Item 1.1.1
                            [menu_part_id] => 4
                            [lft] => 2
                            [rgt] => 5
                            [depth] => 1
                            [children] => Array
                                (
                                    [0] => Array
                                        (
                                            [id] => 8
                                            [name] => Menu Item 1.1.1.1
                                            [menu_part_id] => 7
                                            [lft] => 3
                                            [rgt] => 4
                                            [depth] => 2
                                        )

                                )

                        )

                )

        )

    [1] => Array
        (
            [id] => 11
            [name] => Menu Item 1.2
            [menu_part_id] => 1
            [lft] => 7
            [rgt] => 8
            [depth] => 0
        )

)


```
