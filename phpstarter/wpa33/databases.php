<?php 

function _getConnection() {
    $dbhost = config_get("database.dbhost");
    $dbuser = config_get("database.dbusername");
    $dbpass = config_get("database.dbpass");
    $dbname = config_get("database.dbname");
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
    if(! $conn ){
        die('Could not connect: ' . mysqli_error());
    }
    return $conn;
}

function db_get_all(string $table_name) {
    $conn = _getConnection();
    $sql = 'SELECT * FROM ' . $table_name;
    
    $result = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);

    return $row;
}

function db_get_where_by_id(string $table_name, int $id) {
    $conn = _getConnection();

    $sql = "SELECT * FROM " . $table_name . " WHERE id = " . $id;

    $result = mysqli_query($conn, $sql);
    
    $row = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    mysqli_close($conn);

    return $row;

}