<?php

$link = mysqli_connect('localhost', 'root', '', 'Mid_Term_Su');

if ($link == false) {
    die ("Error: Could not connect. " .mysqli_connect_error());
}

$sql_Student = "INSERT INTO Student
(snum, sname, major, level, age) VALUES
(051135593,Maria White,English,SR,21),
(060839453,Charles Harris,Architecture,SR,22),
(099354543,Susan Martin,Law,JR,20),
(112348546,Joseph Thompson,Computer Science,SO,19),
(115987938,Christopher Garcia,Computer Science,JR,20),
(132977562,Angela Martinez,History,SR,20),
(269734834,Thomas Robinson,Psychology,SO,18),
(280158572,Margaret Clark,Animal Science,FR,18),
(301221823,Juan Rodriguez,Psychology,JR,20),
(318548912,Dorthy Lewis,Finance,FR,18),
(320874981,Daniel Lee,Electrical Engineering,FR,17),
(322654189,Lisa Walker,Computer Science,SO,17),
(348121549,Paul Hall,Computer Science,JR,18),
(351565322,Nancy Allen,Accounting,JR,19),
(451519864,Mark Young,Finance,FR,18),
(455798411,Luis Hernandez,Electrical Engineering,FR,17),
(462156489,Donald King,Mechanical Engineering,SO,19),
(550156548,George Wright,Education,SR,21),
(552455318,Ana Lopez,Computer Engineering,SR,19),
(556784565,Kenneth Hill,Civil Engineering,SR,21),
(567354612,Karen Scott,Computer Engineering,FR,18),
(573284895,Steven Green,Kinesiology,SO,19),
(574489456,Betty Adams,Economics,JR,20),
(578875478,Edward Baker,Veterinary Medicine,SR,21)";

if (mysqli_query($link, $sql_Student)) {
    echo "Values inserted into Student table\n";
} else {
    echo "Error: could not able to insert into table " .mysqli_error($link);
}

$sql_department = "INSERT INTO department 
(fid,fname, deptid) VALUES
(142519864,Ivana Teach,20),
(242518965,James Smith,68),
(141582651,Mary Johnson,20),
(011564812,John Williams,68),
(254099823,Patricia Jones,68),
(356187925,Robert Brown,12),
(489456522,Linda Davis,20),
(287321212,Michael Miller,12),
(248965255,Barbara Wilson,12),
(159542516,William Moore,33),
(090873519,Elizabeth Taylor,11),
(486512566,David Anderson,20),
(619023588,Jennifer Thomas,11),
(489221823,Richard Jackson,33),
(548977562,Ulysses Teach,20)";

if (mysqli_query($link, $sql_department)) {
    echo "Values inserted into Department table\n";
} else {
    echo "Error: could not able to insert into table " .mysqli_error($link);
}

$sql_class = "INSERT INTO Class(name, meet_at, Room, fid)VALUES
(Data Structures,MWF 10,R128,489456522),
(Database Systems,MWF 12:30-1:45,1320 DCL,142519864),
(Operating System Design,TuTh 12-1:20,20 AVW,489456522 ),
(Archaeology of the Incas,MWF 3-4:15,R128,248965255),
(Aviation Accident Investigation,TuTh 1-2:50,Q3,011564812),
(Air Quality Engineering,TuTh 10:30-11:45,R15,011564812),
(Introductory Latin,MWF 3-4:15,R12,248965255),
(American Political Parties,TuTh 2-3:15,20 AVW,619023588),
(Social Cognition,Tu 6:30-8:40,R15,159542516),
(Perception,MTuWTh 3,Q3,489221823),
(Multivariate Analysis,TuTh 2-3:15,R15,090873519),
(Patent Law,F 1-2:50,R128,090873519),
(Urban Economics,MWF 11,20 AVW,489221823),
(Organic Chemistry,TuTh 12:30-1:45,R12,489221823),
(Marketing Research,MW 10-11:15,1320 DCL,489221823),
(Seminar in American Art,M 4,R15,489221823),
(Orbital Mechanics,MWF 8,1320 DCL,011564812),
(Dairy Herd Management,TuTh 12:30-1:45,R128,356187925),
(Communication Networks,MW 9:30-10:45,20 AVW,141582651),
(Optical Electronics,TuTh 12:30-1:45,R15,254099823),
(Intoduction to Math,TuTh 8-9:30,R128,489221823)";

if (mysqli_query($link, $sql_class)) {
    echo "Values inserted into Class table";
} else {
    echo "Error: could not able to insert into table " .mysqli_error($link);
}



$sql_course = "INSERT INTO Course(snum, cname) VALUES
(112348546,Database Systems),
(115987938,Database Systems),
(348121549,Database Systems),
(322654189,Database Systems),
(552455318,Database Systems),
(455798411,Operating System Design),
(552455318,Operating System Design),
(567354612,Operating System Design),
(112348546,Operating System Design),
(115987938,Operating System Design),
(322654189,Operating System Design),
(567354612,Data Structures),
(552455318,Communication Networks),
(455798411,Optical Electronics),
(301221823,Perception),
(301221823,Social Cognition),
(301221823,American Political Parties),
(556784565,Air Quality Engineering),
(099354543,Patent Law),
(574489456,Urban Economics)";

if (mysqli_query($link, $sql_course)) {
    echo "Values inserted into Course table";
} else {
    echo "Error: could not able to insert into table " .mysqli_error($link);
}

$sql_provider = "INSERT INTO Course(sid, sname, address) VALUES
(1,Acme Widget Suppliers,"1 Grub St., Potemkin Village, IL 61801"),
(2,Big Red Tool and Die,"4 My Way, Bermuda Shorts, OR 90305"),
(3,Perfunctory Parts,"99999 Short Pier, Terra Del Fuego, TX 41299"),
(4,Alien Aircaft Inc.,"2 Groom Lake, Rachel, NV 51902")";

if (mysqli_query($link, $sql_provider)) {
    echo "Values inserted into provider table";
} else {
    echo "Error: could not able to insert into table " .mysqli_error($link);
}


$sql_goodies = "INSERT INTO Goodies(pid, pname, color) VALUES
(1,Left Handed Bacon Stretcher Cover,Red),
(2,Smoke Shifter End,Black),
(3,Acme Widget Washer,Red),
(4,Acme Widget Washer,Silver),
(5,I Brake for Crop Circles Sticker,Translucent),
(6,Anti-Gravity Turbine Generator,Cyan),
(7,Anti-Gravity Turbine Generator,Magenta),
(8,Fire Hydrant Cap,Red),
(9,7 Segment Display,Green)";

if (mysqli_query($link, $sql_goodies)) {
    echo "Values inserted into goodies table";
} else {
    echo "Error: could not able to insert into table " .mysqli_error($link);
}



mysqli_close($link)

?>