<?

//********************************
//以下部分用来 登陆
//********************************

if($_POST['action'] == "login"){

    $username = $_POST["name"];
    $password =  $_POST["pass"];

    include( 'conn.php' );

    $query = mysql_query("SELECT `mno`,`mid` from `manager` where `mid`='$username' and `mpassword`='$password' limit 1");
    

    //判断用户是否存在，密码是否正确 
    if($row = mysql_fetch_array($query)) 
    { 
        //设置session生命周期 半个小时 
        $lifeTime = 18; 
        session_set_cookie_params($lifeTime);
        
        session_start(); //标志Session的开始 

        $_SESSION['mno'] = $row['mno']; 
        $_SESSION['mid'] = $row['mid']; 

        $url="main.php";
        header("Location: $url");
    } 
    else //如果用户名和密码不正确，则输出错误 
    { 
        echo "<html><head><title>login failed</title></head><body>";
        echo "<a href='loginin.php' href='index.php'>用户名或密码错误</a>"; 
        echo "</body></html>";
    } 

}


//********************************
//以下部分用来 注销登录
//********************************

if($_POST['action'] == "logout"){
    session_start();
    unset($_SESSION['mno']);
    unset($_SESSION['mid']);
    //  这种方法是销毁整个 Session 文件
    session_destroy();
    echo '注销登录成功！点击此处 <a href="index.php">登录</a>';
    exit;
}

?>
