<?php
    // Create connection
    $conn = new mysqli("localhost", "root", "", "protocolo");
    // Check connection
    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error);
    }
    // sql to create table
    $sql = "CREATE TABLE clientes1 ( id INT(6) UNSIGNED AUTO_INCREMENT , nome
    VARCHAR(30) NOT NULL, email VARCHAR(50),datacad TIMESTAMP DEFAULT
    CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)" ;
    if ($conn->query($sql) === TRUE) { 
        echo "Tabela criada com Sucesso!" ; 
    }
    else { 
        echo "Tabela clientes já existe no banco! " . $conn->error; 
    }

/* Select queries return a resultset */
$result = $conn->query ("SELECT Name FROM City LIMIT 10" );
    if (!result) echo $conn->error;
        printf("Select returned %d rows.\n" , $result->num_rows);
    while ($row = $result->fetch_row()) {
        printf ("%s (%s)\n", $row[0], $row[1]);// imprime as linhas
    }
$conn->close();