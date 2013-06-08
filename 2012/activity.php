<?php
  $page = "activity";
?>
<html lang="zh-TW" class="">
  <head><?php include_once("header.php");?></head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar.php");?>
    <div class="container" id="all">
      <div class="space"></div>
      <div class="article">
	      <div id="sponsorList">
		<div class="offset1 span9 second well-large">
			<h3>照片集：</h3>
			<ul class="thumbnails">
        <li class="thumbnail"><a href="gallery.php">MOPCON 2012照片集</a></li>
			</ul>
		</div>
		<div class="offset1 span9 second well-large">
			<h3>irc log：(感謝 chusaing 協助紀錄)</h3>
			<ul class="thumbnails">
        <li class="thumbnail"><a rel="external" href="irclog/day1.log">day 1 (10/27)</a></li>
        <li class="thumbnail"><a rel="external" href="irclog/day2.log">day 2 (10/28)</a></li>
			</ul>
		</div>
		<div class="offset1 span9 second well-large">
			<h3>工作人員的話：</h3>
			<ul class="thumbnails">
                            <li class="thumbnail">整理中，敬請期待</li>
			</ul>
		</div>
              </div>
      </div>
    </div>
    <?php include_once("footer.html");?>
  </body>
</html>
