<?php require_once('Connections/connection.php'); ?>
<?php 
mysql_select_db($database_connection, $connection);
$query= mysql_query("SELECT * FROM `projects`") or die(mysql_error());
//$row=mysql_fetch_array($query);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ayubia National Park</title>
<meta name="keywords" content="green jelly, blog theme, free templates, website design, templatemo, CSS, HTML" />
<meta name="description" content="Green Jelly, Blog Theme, free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
  
</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
       <div id="header_left">
         <h2><a href="index.php"><img src="images/panda1.png" width="312" height="89"> </a>
       </div> 
       
       <div id="header_right">
       <img src="images/logo1.png" width="388" height="131" /> 
       <img src="images/coke.png" width="120" height="50"/></h2>
</div>	 <div id="templatemo_search">
           </div>
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    
    <div id="templatemo_menu" class="ddsmoothmenu">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Gallery</a>
            
            <li><a href="maps.html">Map</a>
                
            </li>
            <li><a href="issues.html">Conservation Issue</a>
                      	</li>
          	<li><a href="biodiversity.html">Biodiversity</a></li>
   
            <li><a href="frontprojects.php" class="selected">WWF Projects</a></li>
                      	<li><a href="contact.php">Contact Us</a></li>
            <a href="http://gr.forwallpaper.com/" title="ταπετσαρία της επιφάνειας εργασίας" class="header_nav"  target="_blank"><img src="images/templatemo_header_nav.png" alt="ταπετσαρία της επιφάνειας εργασίας" title="ταπετσαρία της επιφάνειας εργασίας" /></a>
        </ul>
    
        <br style="clear: left" />
    
    </div>
    <div id="templatemo_main">
		<div class="post_box"> 
         <?php 
 	while($row=mysql_fetch_array($query))
	{
 ?> 
        	<h2><?php echo $row['proj_name'];?></h2>
        	<div class="post_meta">
            	<ul>
                
                	<li>Uploaded By</li>
					<li><?php echo $row['proj_author'];?></li>
				</ul>
            </div>
            <div class="col_b float_r">
                <img src="projectpics/<?php echo $row['p_name'];?>" alt="Image 12" class="image_frame_300" />
                <div class="post_text">
                    <p><?php echo $row['p_desc'];?></p>
                    </div>                
			</div>
            <?php }?>
            <div class="cleaner"></div>
        </div>
        <div class="post_box"></div>
    <div class="post_box"> </div>
        
        
      
    </div> <!-- end of main -->
    <center>
            <div class="footer_social_button">
                <a href="#"><img src="images/facebook-32x32.png" title="facebook" alt="facebook" /></a>
                <a href="#"><img src="images/flickr-32x32.png" title="flickr" alt="flickr" /></a>
                <a href="#"><img src="images/twitter-32x32.png" title="twitter" alt="twitter" /></a>
                <a href="#"><img src="images/youtube-32x32.png" title="youtube" alt="youtube" /></a>
                <a href="#"><img src="images/rss-32x32.png" title="rss" alt="rss" /></a>
			</div>       		
        </center>
        <div class="cleaner"></div>
    </div> <!-- end of footer -->
</div>

<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	Copyright © 2013 <a href="login.php">Ayubia National Park</a> | Designed by Arif Hameed
    </div>
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>