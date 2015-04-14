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
	<div class="xsServiceLink"><a href="http://schoolserver:3000" target="_blank">KIWIX</a></div>
  <div class="xsServiceDesc">KIWIX is another collection of Wikipedias, Wikidictionaries, Project Gutenberg and other Internet content served offline.</div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:3000/wikipedia_rw_all_2015-04" target="_blank">Kinyarwanda Wikipedia</a></div>
  <div class="xsServiceDesc">The Kinyarwanda Wikipedia is on the KIWIX menu.</div>
</div>

<h2>Khan Academy</h2>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:8008" target="_blank">Khan Academy</a></div>
  <div class="xsServiceDesc">KA Lite, the offline version of Khan Academy (user kalite, password kalite).</div>
</div>
<!--
<?php hard_link("/iiab/zim/iframe/wikipedia_sw_all_04_2011", "Wikipedia katika Swahili", "Wikipedia ni kamusi elezo huru ya lugha nyingi katika mtandao.","/library/knowledge/modules/wikipedia-zim/wikipedia_sw_all_04_2011.zim"); ?>
-->
<h2>Maps</h2>
<?php hard_link("/iiab/static/map.html", "Open Street Maps", "Open Street Maps from Internet-in-a-Box","/library/knowledge/modules/openstreetmap/mod_tile64"); ?>

<h2>Collaboration</h2>
<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver/owncloud" target="_blank">Your Own Cloud</a></div>
  <div class="xsServiceDesc">owncloud is an offline file sharing, calendaring, and collaboration server (user Admin, password changeme).</div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver/elgg" target="_blank">ELGG</a></div>
  <div class="xsServiceDesc">Elgg is an offline social media server (user Admin, password changeme).</div>
</div>

<?php hard_link("/content", "Access Other Content", "Put additional content in /library/content and any subdirectories and link to it with this function, such as syans in Haiti."); ?>

<h2>Tools for Administrators</h2>
<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:5984/xovis/_design/xovis-couchapp/index.html" target="_blank">XOvis</a></div>
  <div class="xsServiceDesc">XOvis is volunteer contributed software to graph statistics on XO use of Activities.</div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver:5984/xovis/_design/xovis-couchapp/index.html" target="_blank">MUNIN</a></div>
  <div class="xsServiceDesc">MUNIN is an administrative application to monitor server performance (user admin, password munindxs).</div>
</div>

<div class="xsServiceWrapper">
	<div class="xsServiceLink"><a href="http://schoolserver/admin" target="_blank">Admin Console</a></div>
  <div class="xsServiceDesc">The Admin Console permits control of the server using a graphical user interface (user xsce-admin, password g0adm1n).</div>
</div>
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
