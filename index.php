<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>QuoHat News</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="image/x-icon" href="logo1.png" rel="shortcut icon" />
        
        <!--Bootstrap CSS-->
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="html2canvas.esm.js" ></script>
        <script src="html2canvas.js" ></script>
        <script src="html2canvas.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       
        <style type="text/css">
        
        body {
        margin : 0;
        }
        #news{
            width : 98%;
            margin : 0 auto;
            height: auto
        }
        #menu-news{
            float : left;
            width : 40%;
            height : auto;
            padding : 1em;
            
        }
        .accordion{
            
            padding : 1em;
            width : 60%;
            float : right ;
            height : auto;
        }
        .card-img-top{
            display: block;
            max-width:550px;
            max-height:350px;
            width: auto;
            height: auto;
        }
        li {
            list-style-type : none;
            font-size : 18px;
        }
        ul { 
            font-size : 15px;
        }
        #imgbg{
        background-image: url("bg.png");
        }
        .card-title{
        font-family: Lexend Deca ;
        font-size : 30px;
        }
        .card-text{
        font-family: Roboto ;
        font-size : 20px;   
        }
        
        </style>
    
    </head>
    <body>
        
		
	</head>
	
	<body>
   
    <?php require "simple_html_dom.php" ?>
		<div id="news" >
            <div id="menu-news" style='height=10000px'>
                <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" >
         Những tin quan trọng nhất
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       <!--Vnexpress-->
        <ul class="list-group">
        <li class="list-group-item active" >Những tin quan trọng nhất của <a style="color : #fff;" href="https://vnexpress.net/" target="_blank" >Vnexpress</a></li>
        <?php
        $html_vnex = file_get_html("https://vnexpress.net/");
        $big_title = $html_vnex->find('div[class=thumb_big] img' , 0)->alt;
        $big_link = $html_vnex->find('div[class=thumb_big] a' , 0)->href;
        echo "<li class='list-group-item'  style='font-size:15px;'> <a href='$big_link' onclick='doalert(this); return false;'>● ".$big_title."</a></li>"; 
        $list = $html_vnex->find('div[class=sub_featured has_banner] li a[data-thumb=0]');
        foreach ($list as $menu) {
                 $title_vnex = $menu->innertext;
                 $link_vnex =  $menu->href;
                  echo "<li class='list-group-item'  style='font-size:15px;'> <a href='$link_vnex' onclick='doalert(this); return false;'>● ".$title_vnex."</a></li>";
        }
        $list1 = $html_vnex->find('section[class=sidebar_home_1] article[data-campaign=ThuongVien] p[class=description] a');
        foreach ($list1 as $menu2) {
                $link_vnex1 = $menu2->href;
                $title_vnex1 =  $menu2->title;
                 echo "<li class='list-group-item'  style='font-size:15px;'> <a href='$link_vnex1' onclick='doalert(this); return false;'>● ".$title_vnex1."</a></li>";
        }
?>
        
        </ul>       
                
       <!--End-vnexpress-->
       <br/>
       <!--Dantri-->
        <ul class="list-group">
        <li class="list-group-item active">Những tin quan trọng nhất của <a style="color : #fff;" href="http://dantri.com.vn/" target="_blank" > Dân Trí</a></li>
        <?php
        $html_dantri = file_get_html("https://dantri.com.vn/");
        $list_dantri = $html_dantri->find('div[class=box1 clearfix] ',0)->find('div[data-boxtype=homenewsposition] a',0);
        $bigtitle_dantri= $list_dantri->title;
        $biglink_dantri = "https://dantri.com.vn".$list_dantri->href;
         echo "<li class='list-group-item' style='font-size:15px;'> <a href='$biglink_dantri' onclick='doalert(this); return false;'>● ".$bigtitle_dantri."</a></li>";
        $list = $html_dantri->find('div[class=xnano-content] a' );
        foreach ( $list as $item  ) {
            $link_dantri = "https://dantri.com.vn".$item->href;
            $text_dantri = $item->plaintext;
            echo "<li class='list-group-item' style='font-size:15px;'> <a href='$link_dantri' onclick='doalert(this); return false;'>● ".$text_dantri."</a></li>";
        }
        ?>
        
        </ul> 
       <!--end dantri-->
       <br/>
       <!--Vietnamnet-->
        <ul class="list-group">
        <li class="list-group-item active">Những tin quan trọng nhất của <a style="color : #fff;" href="http://vietnamnet.vn/" target="_blank" >VietNamNet</a></li>
        <?php
        $html_vnnet = file_get_html("https://vietnamnet.vn");
        $list_vnnet = $html_vnnet->find('div[class=top-one]',0);
        $bigtitle_vnnet = $list_vnnet->find('img',0)->alt;
        $biglink_vnnet = "https://vietnamnet.vn/".$list_vnnet->find('a',0)->href;
         echo "<li class='list-group-item'  style='font-size:15px;'> <a href='$biglink_vnnet' onclick='doalert(this); return false;'>● ".$bigtitle_vnnet."</a></li>";
        $list = $html_vnnet->find('div[class=TopNew va-top] ul[class=height-list] a');
        foreach ($list as $key) {
            $link_vnnet = "https://vietnamnet.vn".$key->href;
            $title = $key->plaintext ;
            $text_vnnet=  str_replace("icon","", $title);
            echo "<li class='list-group-item'  style='font-size:15px;'> <a href='$link_vnnet' onclick='doalert(this); return false;'>● ".$text_vnnet."</a></li>";
        }
        ?>
        
        </ul> 

       <!--end vietnamnet-->
       <br/>
       <!--Nhandan-->
       <ul class="list-group">
        <li class="list-group-item active">Những tin quan trọng nhất của<a style="color : #fff;" href="https://tuoitre.vn/" target="_blank" > Tuổi Trâu</a></li>
        <?php
            $html_tuoitrau =  file_get_html("https://tuoitre.vn/tin-moi-nhat.htm");
            $list_tuoitrau = $html_tuoitrau->find("a[data-linktype=newsdetail]");
            foreach ($list_tuoitrau as $menu_tuoitrau) {
                $title_tuoitrau = $menu_tuoitrau->title;
                $link_tuoitrau = "https://tuoitre.vn".$menu_tuoitrau->href;
                echo "<li class='list-group-item'  style='font-size:15px;'> <a href='$link_tuoitrau' onclick='doalert(this); return false;'>● ".$title_tuoitrau."</a></li>";
            }
            ?>
        </ul> 
       <!--end nhan dan-->
       </div>
            </div>
        </div>
        </div>
        </div><div id="YUdfWkEZQTExQRlBWl9HYQ=="></div>

            <!--Conteiner-->
            
            <div class="accordion" id="accordionExample">
                 <div class="card" >
                    <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" >
                        Tin của bạn 
                        </button>
                    </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <form action="" method="post"> 
                        <div class="input-group mb-3" >
                        <input  style="height: 40px; " placeholder="Your link..." id="validationDefault01"  name="url"  autocomplete="off" type="text" class="form-control"  >
                        <div class="input-group-append">
                            <button name="submit" class="btn btn-outline-secondary" type="submit" id="button-addon2">Click here !</button>
                        </div>
                        </div>
                        </form><br>
                        <?php
                        error_reporting(0);
                                if(isset($_POST['submit'])){
                                    $url = $_POST['url'];
                                    $submit = $_POST['submit'];
                                    $urll=parse_url($url);
                                    $host = $urll['host'];
                                switch ($host) {
                                    case 'vnexpress.net':
                                        $html = file_get_html(str_replace("beta.","",$url));
                                        $title = $html->find("meta[name=its_title]", 0)->content;
                                        $img = $html->find("meta[name=twitter:image]",0)->content;
                                        $time = $html->find("span[class=time left]",0)->innertext;
                                        $des = $html->find("meta[name=twitter:description]",0)->content;
                                        $des1 = $html->find(" p[class=Normal]",0)->innertext;
                                        $title = str_replace('\\','',$title);
                                         require "sor.php";
                                         echo $text;
                                        break;
                                    case 'dantri.com.vn':
                                        $html = file_get_html(str_replace("beta.","",$url));
                                        $title = $html->find("meta[name=twitter:title]", 0)->content;
                                        $img = $html->find("meta[name=twitter:image]",0)->content;
                                        $time = $html->find("span[class=fr fon7 mr2 tt-capitalize]",0)->innertext;
                                        $des = $html->find("meta[name=twitter:description]",0)->content;
                                        $des1 = $html->find("div[id=divNewsContent] p" ,0)->innertext;
                                        $title = str_replace('\\','',$title);
                                         require "sor.php";
                                         echo $text;
                                        break;
                                    case 'vietnamnet.vn':
                                        $html = file_get_html(str_replace("beta.","",$url));
                                        $title = $html->find("meta[property=og:title]", 0)->content;
                                        $img = $html->find("meta[property=og:image]",0)->content;
                                        $time = $html->find("p[class=time-zone]",0)->innertext;
                                        $des = $html->find("meta[name=description]",0)->content;
                                        //
                                        $title = str_replace('\\','',$title);
                                         require "sor.php";
                                         echo $text;
                                        break;
                                    case 'tuoitre.vn':
                                        $html = file_get_html($url);
                                        $title = $html->find("h1[class=article-title]", 0)->innertext;
                                        $img = $html->find("meta[property=og:image:secure_url]",0)->content;
                                        $time = $html->find("p[class=title-time-home fr]",0)->innertext;
                                        $des = $html->find("meta[name=description]",0)->content;
                                        $des1 = $html->find(" div[class=content fck] p",1)->innertext;
                                        $title = str_replace('\\','',$title);
                                         require "sor.php";
                                         echo $text;
                                        break;
                                    
                                    default:
                                        # code...
                                        break;
                                }   

                                } ;// isset
                        ?>          
                        </div>
                                    </div>
                                </div>
            <!--end conteiner-->
        <script>
            function doalert(obj) {
                var news = obj.getAttribute("href");
                document.getElementById('validationDefault01').value = news;
                document.querySelector("button[type='submit']").click();
                return false;
            }
        </script>
        <!--Bootstrap JS-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
