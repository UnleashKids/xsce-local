<!DOCTYPE html>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php require 'incl/service_list.php'; ?>
<link rel="stylesheet" type="text/css" media="all" href="xs-portal.css" />
<HTML>
<HEAD>

<TITLE>XSCE School Server</TITLE>

</HEAD>
<BODY>
<div id="wrapper">
<h1>XSCE School Server</h1>
<?php require 'incl/banner.html'; ?>

<div id="main">
<br><h2>Interesting Things You Can Do Here:</h2>

<h2>Internet Collection</h2>
<?php hard_link("/rachel", "RACHEL", "RACHEL is a collection of some of the most important material on the internet, such as the Wikipedia, stored locally where you can reach it easily."); ?>

<h2>More Wikipedias</h2>

<div class="xsServiceWrapper">
	<div class="xsServiceLink">
		<a href="http://schoolserver:3000/wikipedia_rw_all_2015_04" _target="blank">Wikipedia in Kinyarwanda</a>
  </div>
</div>

<a href="http://schoolserver:3000/wikipedia_rw_all_2015_04">Wikipedia in Kinyarwanda</a>
<!--
<?php hard_link("/iiab/zim/iframe/wikipedia_sw_all_04_2011", "Wikipedia katika Swahili", "Wikipedia ni kamusi elezo huru ya lugha nyingi katika mtandao.","/library/knowledge/modules/wikipedia-zim/wikipedia_sw_all_04_2011.zim"); ?>
-->
<h2>Maps</h2>
<?php hard_link("/iiab/static/map.html", "Open Street Maps", "Open Street Maps from Internet-in-a-Box","/library/knowledge/modules/openstreetmap/mod_tile64"); ?>

<h2>Local Content</h2>
<?php hard_link("/content", "Access Other Content", "Put additional content in /library/content and any subdirectories and link to it with this function, such as syans in Haiti."); ?>

<!--
<h2>Other Content</h2>
<?php hard_link("/content", "Browse Other Content", "This is the place for local downloads."); ?>
-->
<BR> Enjoy Exploring!
</div><!-- #main -->
</div><!-- #wrapper -->
</BODY>
<script type="text/javascript" src="incl/xs-portal.js"></script>
</HTML>
