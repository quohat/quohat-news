<?php
error_reporting(0);
$text =                               
"<section>
<figure >
<div class='card' id='card_img' style=' margin: auto;  position: relative;'>
<img src='logo1.png' style='position:absolute; margin-top : 25px; margin-left:30px ; height : 65px'/>
<div id='imgbg' style='width: 100%; height: auto; display: flex;'>
<img class='card-img-top'  style='height: auto; max-width: 100%; margin: auto;' src='$img'>
</div>
<div class='card-body' id='bg_body'>
<h5 class='card-title'>$title</h5>
<p class='card-text' >$des $des1 </p>
<p style='font-family: Roboto '>$time || $host || QuoHat News</p>
</div>
</div></figure></section><br/>
<center><button type='button'  id='btn-Preview-Image' class='btn btn-primary btn-lg'>Create Image</button></center>
<br/>

<div id='previewImage' >

</div>
<script>
$(document).ready(function(){
var element = $('#card_img'); 
var getCanvas; 
$('#btn-Preview-Image').on('click',  () => {
var preview = document.createElement('div') ;
        var node = document.createTextNode('Ảnh của bạn đã được tạo ! Hãy sao chép ảnh và dán ảnh vào Facebook ');
        preview.className = 'alert alert-primary';
        preview.appendChild(node);
        var div = document.getElementById('previewImage');
            div.appendChild(preview); 
        var br =  document.createElement('br')
            div.appendChild(br);

    window.scrollTo(0, 0);
    html2canvas(element[0], {
        scale: 2,
    allowTaint: true,
    }).then((e)=>{
        
                $('#previewImage').append(e);
               
                
                
        });
});
});

</script>
";

?>
                        
