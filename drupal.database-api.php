<?php

/**
 * @defgroup drupal_database_usage Sử dụng Database API.
 * @{
 * Chuyển từ Drupal 6 sang 7, có sự thay đổi lớn về cách làm việc
 * với cơ sở dữ liệu -- mọi thao tác đến cơ sở dữ liệu trong Drupal,
 * đều thông qua DBTNG (Database The Next Generation), được xây
 * dựng trên nền @link http://php.net/manual/en/book.pdo.php PDO @endlink.
 *
 * Việc sử dụng DBTNG giúp Drupal và các module thống nhất được
 * cú pháp PHP để làm việc với các loại cơ sở dữ liệu khác nhau (MySQL,
 * PostgreSQL, SQLite, ...)
 *
 * Sau đây là một số thí dụ sử dụng DBTNG. Có thể tham khảo thêm ở
 * @link http://drupalvietnam.org/api/search/documentation/dbtng_example dbtng_example module @endlink
 *
 * Thí dụ db_insert():
 * @code
 *  // INSERT INTO {dbtng_example} (name, surname) VALUES('John, 'Doe')
 *  db_insert('dbtng_example')
 *    ->fields(array('name' => 'John', 'surname' => 'Doe'))
 *    ->execute();
 * @endcode
 *
 * Thí dụ db_update():
 * @code
 *  // UPDATE {dbtng_example} SET name = 'Jane' WHERE name = 'John'
 *  db_update('dbtng_example')
 *    ->fields(array('name' => 'Jane'))
 *    ->condition('name', 'John')
 *    ->execute();
 * @endcode
 *
 * Thí dụ db_delete():
 * @code
 *  // DELETE FROM {dbtng_example} WHERE name = 'Jane'
 *  db_delete('dbtng_example')
 *    ->condition('name', 'Jane')
 *    ->execute();
 * @endcode
 *
 * Thí dụ nối bảng INNER JOIN:
 * @code
 *   db_select('node', 'n')
 *     ->innerJoin('users', 'u', 'n.uid = u.uid');
 * @endcode
 *
 * Lấy kết quả truy vấn:
 * @code
 *   // Get uid, name of users who access Drupal last 10 minutes
 *   $query = db_select('users', 'u')->fields('u', array('uid', 'name'));
 *   $query->condition('u.access', time() - 10 * 60, '>=');
 *   $users = $query->execute()->fetchAll();
 *   print_r($users);
 * @endcode
 */
/**
 * @} End of "defgroup drupal_database_usage"
 */
