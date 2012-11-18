<?php
// Makes connection to the surfscore databases and returns an array with the results

function db_connect($query, $db = 'surfscore_db') {
  $return = array();
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $db_connection = mysql_connect($server, $username, $password);
  mysql_select_db($db, $db_connection);
  $result = mysql_query($query, $db_connection);

  if (is_bool($result)) {
      $return[] = $result;
    } else {
      while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
        $return[] = $row;
      }
    }
  return $return;
}

function register_new_user($email) {
  $sql = "insert into tblssregister values (default, $email)";
  return db_connect($sql);
}

?>
