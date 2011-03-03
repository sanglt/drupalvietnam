<?php
// $Id: drupal.database-api.php 1 2010-12-28 04:38:52Z drupalvietnam $

/**
 * @defgroup drupal_database_usage Sử dụng Database API.
 * @{
 * Từ Drupal 7
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
 *   $users = $query->execute()->fetAll();
 *   print_r($users);
 * @endcode
 */
/**
 * @} End of "defgroup drupal_database_usage"
 */
