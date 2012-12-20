<?php
// nicks improved mysql class :o)

class MySQL_DB {
  var $con;
  
  function MySQL_DB($server,$user,$pass,$db, $con=false) {
    if($con) {
      $this->con = $con;
     
    }
    else {
      $this->con = mysql_pconnect($server,$user,$pass) or $this->error();
      mysql_set_charset('utf8', $this->con);
      mysql_select_db($db, $this->con) or $this->error();
    }
  }
  
  function query($sql) {
    $res = mysql_query($sql,$this->con) or $this->error();
    
    
    return new MySQL_DB_Result($res, $this->con);
  }
  
  function uquery($sql) {
      $res = mysql_unbuffered_query($sql,$this->con) or $this->error();


      return new MySQL_DB_Result($res, $this->con);
    }
  function fetchAll($sql) {
      $res = $this->query($sql);
      return $res->fetchAll();
  }
  function fetchFirst($sql) {
      $res = $this->query($sql);
      return $res->assoc();
  }
  function error() {
    trigger_error('DB Error: ' . mysql_error($this->con));
  }
  
  function insert_id() {
    return mysql_insert_id($this->con);
  }
  function lastInsertId() {
      return $this->insert_id();
  }
  
  function escape($txt) {
      return mysql_real_escape_string($txt);
  }
  function close() {
	mysql_close($this->con);
  }

  function quote($str) {
	  return "'" . mysql_real_escape_string($str) . "'";
  }
}

class MySQL_DB_Result {
  var $res;
  var $con;
  
  function MySQL_DB_Result($res,$con) {
    $this->res = $res;
    $this->con = $con;
  }
  
  function assoc() {
    return mysql_fetch_assoc($this->res);
  }
  function fetch() {
      return $this->assoc();
  }
  function insert_id() {
    return mysql_insert_id($this->con);
  }
  
  function numrows() {
    return mysql_num_rows($this->res);
  }
  
  function fetchAll() {
    $result = array();
    while($row = $this->assoc()) {
      $result[] = $row;
    }
    return $result;
  }
  
  function free() {
    return mysql_free_result($this->res);
  }
}


// Saves Lives
class MySQL_Controller {
  
  var $id;
  var $data = array();
  var $table;
  function MySQL_Controller($table,$id=null) {
    $this->table = $table;
    $this->id = $id;
    $this->rehash();
    
  }
  
  function rehash() {
    global $dbp;
    if($this->id != null) {
    $sql = "
      select *
      from $this->table
      where id = '$this->id'";
      
      $res = $dbp->query($sql);
    
      $this->data = $res->assoc();
    }
  }
  
  function set($k, $v) {
    $this->data[$k] = $v;
  }
  
  function get($k) {
    return $this->data[$k];
  }
  
  function save() {
    global $dbp;
    if($this->id != null) {
      $sql = "
        update {$this->table} set ";
      
      foreach($this->data as $k => $v) {
	    $v = stripslashes($v);
	    $v = mysql_real_escape_string($v);
        if($k != 'id' && !is_array($v)) {
          $sql .= "\n $k = '$v',";
        }
      
      }
    
      // remove last comma
      $sql{strlen($sql) - 1} = ' ';
    
      $sql .= " where id = '$this->id'";
      $dbp->query($sql);
    
      $this->rehash();
    }
  }
  
  
  function create() {
    global $dbp;
    
    $fields = '';
    $values = '';
    foreach($this->data as $k => $v) {
      if($k != 'id' && !is_array($v)) {
	    $v = stripslashes($v);
	    $v = mysql_real_escape_string($v);
        //$sql .= "\n $k = '$v',";
        $fields .= " $k, ";
        if($v == 'now()') {
          $values .= " now(),";
        }
        else {
          $values .= " '$v', ";
        }
      }
      
    }
    $fields = trim($fields, ', ');
    $values = trim($values, ', ');
    
    $sql = "
      insert into {$this->table}($fields) values($values)";
    
    $dbp->query($sql);
    $this->id = $dbp->insert_id();
    return $this->id;
  }
  
}


if (!function_exists('mysql_set_charset')) {
	function mysql_set_charset($charset, $link_identifier = null) {
		if ($link_identifier == null) {
			return mysql_query('SET CHARACTER SET "'.$charset.'"');
		} else {
			return mysql_query('SET CHARACTER SET "'.$charset.'"', $link_identifier);
		}
	}
}

?>
