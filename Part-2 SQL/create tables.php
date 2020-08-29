<?php

$link = mysqli_connect('localhost', 'root', '', 'Mid_Term_Su');

if ($link == false) {
    die ("Error: Could not connect. " .mysqli_connect_error());
}

$sql_Student = "CREATE TABLE Student(
    snum decimal(9,0) PRIMARY KEY ,
    sname VARCHAR(30),
    major VARCHAR(25),
    level VARCHAR(2) ,
    age decimal(3,0)   
)";

if (mysqli_query($link, $sql_Student)) {
    echo "Student table created.\n";
} else {
    echo "Error: could not able to create table " .mysqli_error($link);
}

$sql_department = "CREATE TABLE Department(
    fid DECIMAL(9,0) PRIMARY KEY,
    fname VARCHAR(30),
    deptid DECIMAL(2,0)
)";

if (mysqli_query($link, $sql_department)) {
    echo "Department table created.\n";
} else {
    echo "Error: could not able to create table " .mysqli_error($link);
}

$sql_course = "CREATE TABLE Course(
    snum DECIMAL(9,0) ,
    cname VARCHAR(40) ,
    PRIMARY KEY(snum,cname)
    
)";

if (mysqli_query($link, $sql_course)) {
    echo "Course table created.";
} else {
    echo "Error: could not able to create table " .mysqli_error($link);
}

$sql_class = "CREATE TABLE Class(
    name VARCHAR(40) PRIMARY KEY ,
    meet_at VARCHAR(20) ,
    room VARCHAR(10),
    FOREIGN KEY (fid) REFERENCES Department(fid)

)";

if (mysqli_query($link, $sql_class)) {
    echo "Class table created.";
} else {
    echo "Error: could not able to create table " .mysqli_error($link);
}


$sql_provider = "CREATE TABLE Provider(
    sid int(9) PRIMARY KEY ,
    sname VARCHAR(30),
    address VARCHAR(40),

)";

if (mysqli_query($link, $sql_provider)) {
    echo "Provider table created.";
} else {
    echo "Error: could not able to create table " .mysqli_error($link);
}

$sql_goodies= "CREATE TABLE Goodies(
    pid int(9) PRIMARY KEY ,
    pname VARCHAR(30),
    color VARCHAR(15),

)";

if (mysqli_query($link, $sql_goodies)) {
    echo "goodies table created.";
} else {
    echo "Error: could not able to create table " .mysqli_error($link);
}


$sql_stock= "CREATE TABLE Stock(
    sid INT(9) PRIMARY KEY ,
    pid INT(9) NOT NULL,
    cost INT(10),
    UNIQUE (pid)
)";

if (mysqli_query($link, $sql_stock)) {
    echo "goodies table created.";
} else {
    echo "Error: could not able to create table " .mysqli_error($link);
}

mysqli_close($link)

?>
