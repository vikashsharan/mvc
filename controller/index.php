<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $page = "home";
        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
//        echo $page ;
        
        include ('model/index.php');
       if($page == 'home')
       {
           include ('view/home.php');
       }
       elseif($page == 'about')
       {
           include ('view/about.php');
       }
 else {
          include ('view/404.php');  
}
        
        ?>
    </body>
</html>
