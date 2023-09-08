<?php
 $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "log_dat";

    $conn = mysqli_connect($server, $user, $pass, $database);

    if (!$conn) {
        die("<script>alert('Connection Failed.')</script>");
    }

 $scho=$_POST['scho'];
 $atl=$_POST['atl'];
 $pass1=$_POST['pass1'];
 $udise=$_POST['udise'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $prin=$_POST['princi'];
 $whapp=$_POST['wapp'];
 $cname=$_POST['cname'];
 $sandate=$_POST['sandate'];
 $state=$_POST['state'];
 $dist=$_POST['dist'];
 $place=$_POST['place'];
 $org=$_POST['orgven'];
 $add=$_POST['add1'];
 $pfms=$_POST['pfms'];
 $pass2=$_POST['pass2'];
 $pfmsop=$_POST['pfmsop'];
 $pass3=$_POST['pass3'];
 $pfmsap=$_POST['pfmsap'];
 $pass4=$_POST['pass4'];
 $gem=$_POST['gem'];
 $pass5=$_POST['pass5'];
 $govmail=$_POST['govmail'];
 $pass6=$_POST['pass6'];
 $pkg=$_POST['pkg'];
 $list=$_POST['list'];
 $query=$_POST['query'];
 $latest=$_POST['latest'];
 $pathdoc=$_POST['pathdoc'];
 $path1=$_POST['path1'];
 $sql = "SELECT * FROM geninfo;
 $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            
    $sql="INSERT INTO geninfo(atlcode,password,udise,phone,email,principal,whatsapp,contactname,sandate, state,district,place ,orgvendor,address,pfms,pfmspass,pfmsop,pswd,pfmsap,appass,gem,gempswd,govmail,govmailpass,pkg,list,query,latest,pathdoc,path1,SCHOOL) VALUES(
'$atl','$pass1','$udise','$phone','$email','$prin','$whapp','$cname','$sandate','$state','$dist','$place','$org','$add','$pfms','$pass2','$pfmsop','$pass3','$pfmsap','$pass4','$gem','$pass5','$govmail','$pass6','$pkg','$list','$query','$latest','$pathdoc','$path1','$scho')";
    $result = mysqli_query($conn, $sql);
?>