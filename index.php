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

        $html_vnex =  file_get_html("https://vnexpress.net/");
        $top_vnex = $html_vnex->find("h3[class=title-news] a" ,0);
        $titletop_vnex = $top_vnex->title;
        $linktop_vnex = $top_vnex->href;
        echo "<li class='list-group-item' style='font-size:15px;'> <a href='$linktop_vnex' onclick='doalert(this); return false;'>● ".$titletop_vnex."</a></li>";
        $top2_vnex = $html_vnex->find("h2[class=title_news] a");
        foreach( $top2_vnex as $top2_vnex){
            $titletop2_vnex = $top2_vnex->title;
            $linktop2_vnex = $top2_vnex->href;
        echo "<li class='list-group-item' style='font-size:15px;'> <a href='$linktop2_vnex' onclick='doalert(this); return false;'>● ".$titletop2_vnex."</a></li>";
        }
        $top3_vnex = $html_vnex->find("h3[class=title-news] a");
        foreach( $top3_vnex as $top3_vnex){
            $titletop3_vnex = $top3_vnex->title;
            $linktop3_vnex = $top3_vnex->href;
        echo "<li class='list-group-item' style='font-size:15px;'> <a href='$linktop3_vnex' onclick='doalert(this); return false;'>● ".$titletop3_vnex."</a></li>";
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
        $list_dantri = $html_dantri->find('div[class=container clearfix] ',0)->find('div[class=news-item__content] a',0);
        $bigtitle_dantri= $list_dantri->title;
        $biglink_dantri = "https://dantri.com.vn".$list_dantri->href;
         echo "<li class='list-group-item' style='font-size:15px;'> <a href='$biglink_dantri' onclick='doalert(this); return false;'>● ".$bigtitle_dantri."</a></li>";
        $list = $html_dantri->find('ul[class=dt-list dt-list--link] h2[class=news-item__title]' );
        foreach ( $list as $item  ) {
            $link_dantri = "https://dantri.com.vn".$item->href;
            $text_dantri = $item->innertext;
            echo "<li class='list-group-item' style='font-size:15px;'> <a href='$link_dantri' onclick='doalert(this); return false;'>● ".$text_dantri."</a></li>";
        }
        ?>
        
        </ul> 
       <!--end dantri-->
       <br/>
       <!--Kênh 14-->
        <ul class="list-group">
        <li class="list-group-item active">Những tin quan trọng nhất của <a style="color : #fff;" href="https://kenh14.vn" target="_blank" >Kênh 14</a></li>
       <?php
            $html_kenh14 =  file_get_html("https://kenh14.vn");
            $list_kenh14 = $html_kenh14->find("h4[class=klwfnswn-title] a");
            $top_kenh14_left = $html_kenh14->find("div[class=klwfn-left fl] h2[class=klwfnl-title] a",0);
            $toptitle_kenh14_left= $top_kenh14_left ->innertext;
            $toplink_kenh14_left = "https://kenh14.vn".$top_kenh14_left->href;
            echo "<li class='list-group-item'  style='font-size:15px;'> <a href='$toplink_kenh14_left' onclick='doalert(this); return false;'>● ".$toptitle_kenh14_left."</a></li>";
            foreach ($list_kenh14 as $menu_kenh14) {
                $title_kenh14 = $menu_kenh14->innertext;
                $link_kenh14 = "https://kenh14.vn".$menu_kenh14->href;
                echo "<li class='list-group-item'  style='font-size:15px;'> <a href='$link_kenh14' onclick='doalert(this); return false;'>● ".$title_kenh14."</a></li>";
            }
        ?>
        
        </ul> 

       <!--end kẽnh-->
       <!--cafebiz-->
       <ul class="list-group">
        <li class="list-group-item active">Những tin quan trọng nhất của <a style="color : #fff;" href="https://cafebiz.vn/" target="_blank" >Cafebiz</a></li>
        <?php
        $html_cfbiz =  file_get_html("https://cafebiz.vn/");
        $top2_cfbiz = $html_cfbiz->find("ul[id=ulTinMoi] li a");
        $i =0;
        foreach( $top2_cfbiz as $top2_cfbiz){
            if($i ==12) break;
            $titletop2_cfbiz = $top2_cfbiz->title;
            $linktop2_cfbiz = "https://cafebiz.vn/".$top2_cfbiz->href;
        echo "<li class='list-group-item' style='font-size:15px;'> <a href='$linktop2_cfbiz' onclick='doalert(this); return false;'>● ".$titletop2_cfbiz."</a></li>";
        $i++;
        }
        ?>
        </ul>
       <!--endcafebiz-->

       <!--thethao-->
       <ul class="list-group">
        <li class="list-group-item active">Những tin quan trọng nhất của <a style="color : #fff;" href="https://thethao247.vn" target="_blank" >THỂ THAO 24/7</a></li>
        <?php

        $html_thethao =  file_get_html("https://thethao247.vn/the-thao-24h.html");
        $top_thethao = $html_thethao->find("ul[class=list_news_thumb_bot --style2] li a",0);
        $linktop_thethao = $top_thethao->href;  
        $titletop_thethao = $top_thethao->title; 
        echo "<li class='list-group-item'  style='font-size:15px;'> <a href='$linktop_thethao' onclick='doalert(this); return false;'>● ".$titletop_thethao."</a></li>";
        $top2_thethao = $html_thethao->find("a[class=linknews_thumb_bot]");
        foreach ( $top2_thethao as  $top2_thethao ) {
            $titletop2_thethao = $top2_thethao->title;
            $linktop2_thethao = $top2_thethao->href;
            echo "<li class='list-group-item'  style='font-size:15px;'> <a href='$linktop2_thethao' onclick='doalert(this); return false;'>● ". $titletop2_thethao."</a></li>";
        }
        $top3_thethao = $html_thethao->find("ul[class=list_title_home] h3 a");
        foreach ( $top3_thethao as  $top3_thethao ) {
            $titletop3_thethao = $top3_thethao->title;
            $linktop3_thethao = $top3_thethao->href;
            echo "<li class='list-group-item'  style='font-size:15px;'> <a href='$linktop3_thethao' onclick='doalert(this); return false;'>● ". $titletop3_thethao."</a></li>";
        }
        
        ?>
        </ul>
       <!--endthethao-->
       <br/>
       
       </div>
            </div>
        </div>
        </div>
        </div>

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
                                        $time = $html->find("span[class=date]",0)->innertext;
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
                                        $time = $html->find("span[class=dt-news__time]",0)->innertext;
                                        $des = $html->find("meta[name=twitter:description]",0)->content;
                                        $des1 = $html->find("div[id=divNewsContent] p" ,0)->innertext;
                                        $title = str_replace('\\','',$title);
                                         require "sor.php";
                                         echo $text;
                                        break;
                                    case 'kenh14.vn':
                                        $html = file_get_html(str_replace("beta.","",$url));
                                        $title = $html->find("meta[property=og:title]", 0)->content;
                                        $img = $html->find("meta[property=og:image]",0)->content;
                                        $time = $html->find("span[class=kbwcm-time]",0)->title;
                                        $des = $html->find("meta[ property=description]",0)->content;
                                        $des1 = $html->find("div[class=knc-content] p" ,0)->innertext;
                                        //
                                        $title = str_replace('\\','',$title);
                                         require "sor.php";
                                         echo $text;
                                        break;
                                    case 'cafebiz.vn':
                                        $html = file_get_html(str_replace("beta.","",$url));
                                        $title = $html->find("meta[property=og:title]", 0)->content;
                                        $img = $html->find("meta[property=og:image]",0)->content;
                                        $time = $html->find("meta[property=article:published_time]",0)->content;
                                        $des = $html->find("meta[name=description]",0)->content;
                                        $des1 = $html->find("div[class=detail-content] p" ,0)->innertext;
                                        //
                                        $title = str_replace('\\','',$title);
                                         require "sor.php";
                                         echo $text;
                                        break;
                                    case 'thethao247.vn':
                                        $html = file_get_html($url);
                                        $title = $html->find("meta[property=og:title]", 0)->content;
                                        $img = $html->find("meta[property=og:image]",0)->content;
                                        $time = $html->find("p[class=ptimezone fregular]",0)->innertext;
                                        $des = $html->find("meta[property=og:description]",0)->content;
                                        $des1 = $html->find(" div[id=abdf] p",1)->innertext;
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
