<?php
// for tabs titles
function tabTitle1()
{
    $con = openCon();
    $sql = "SELECT author FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 4,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['author'];
    closeCon($con);
}
function tabTitle2()
{
    $con = openCon();
    $sql = "SELECT author FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 5,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['author'];
    closeCon($con);
}
function tabTitle3()
{
    $con = openCon();
    $sql = "SELECT author FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 6,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['author'];
    closeCon($con);
}
function tabTitle4()
{
    $con = openCon();
    $sql = "SELECT author FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 7,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['author'];
    closeCon($con);
}


// for tab headings
function tabHeading1()
{
    $con = openCon();
    $sql = "SELECT title FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 4,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['title'];
    closeCon($con);
}
function tabHeading2()
{
    $con = openCon();
    $sql = "SELECT title FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 5,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['title'];
    closeCon($con);
}
function tabHeading3()
{
    $con = openCon();
    $sql = "SELECT title FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 6,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['title'];
    closeCon($con);
}
function tabHeading4()
{
    $con = openCon();
    $sql = "SELECT title FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 7,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['title'];
    closeCon($con);
}

// for tab contents
function tabContent1()
{
    $con = openCon();
    $sql = "SELECT quote FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 4,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['quote'];
    closeCon($con);
}
function tabContent2()
{
    $con = openCon();
    $sql = "SELECT quote FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 5,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['quote'];
    closeCon($con);
}
function tabContent3()
{
    $con = openCon();
    $sql = "SELECT quote FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 6,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['quote'];
    closeCon($con);
}
function tabContent4()
{
    $con = openCon();
    $sql = "SELECT quote FROM quotes WHERE author!='admin' ORDER BY id DESC LIMIT 7,1";
    $res = $con->query($sql);
    $data = $res->fetch_assoc();
    return $data['quote'];
    closeCon($con);
}
?>