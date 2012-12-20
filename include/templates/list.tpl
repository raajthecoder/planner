<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Wedding Planner</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/coolblue.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/login-box.css" />
    
    <script src="js/jquery-1.6.1.min.js"></script>
    <script src="js/jquery.lightbox_me.js"></script>
    <script src="js/scrollToTop.js"></script>
    <script>
    
		$(document).ready(function(){
			$('#login').click(function(e) {
			    $('#login-div').lightbox_me({
			        centered: true, 
			        onLoad: function() { 
			            $('#login-div').find('input:first').focus();
			            }
			        });
			   	e.preventDefault();
			});
		});
		
	</script>
	{include file="analytics.tpl"}
</head>

<body id="top">
<div id="header-wrap">
	<header>
	<hgroup>
	    <h1><a href="index.php">Planner.</a></h1>
	    <h3>Plane for a stree-free wedding</h3>
	</hgroup>

	<nav>
		{if isset($username)}
		<ul>
			<li><a href="#">Welcome {$username}</a><span></span></li>
			<li id="current"><a href="index.php">Home</a><span></span></li>
			<li><a href="list.php">Task-List</a><span></span></li>
			<li><a href="create.php">Create</a><span></span></li>
			<li><a href="index.php?action=logout">Logout</a><span></span></li>
		</ul>
		{else}
		<ul>
			<li id="current"><a href="index.html">Home</a><span></span></li>
			<li><a href="list.php">Task-List</a><span></span></li>
			<li><a href="create.php">Create</a><span></span></li>
			<li id="login"><a href="login.php">Login</a><span></span></li>
		</ul>
		{/if}
	</nav>

	<div class="subscribe">
	    <span>Subscribe:</span> <a href="#">Email</a> | <a href="#">RSS</a>
	</div>

	<form id="quick-search" method="get" action="index.php">
	  <fieldset class="search">
	     <label for="qsearch">Search:</label>
	     <input class="tbox" id="qsearch" type="text" name="qsearch" value="Search..." title="Start typing and hit ENTER" />
	     <button class="btn" title="Submit Search">Search</button>
	  </fieldset>
	</form>
   
	</header>
</div>

<div id="content-wrap">
	<div id="content" class="clearfix">
	 	<div id="main">
 			<form action="list.php" method="post">
			
				<table width="100%" border="0">
					<tr>
						<td>Name/Description</td>
						<td><input type="text" name="name" value="{$name}" /></td>
						<td>Estimated Price</td>
						<td> <input type="text" name="price" value="{$price}" /></td>
					</tr>
					<tr>
						<td>Assigned to</td>
						<td>{html_options id=assigned name=assigned options=$users selected=$assigned}</td>
						<td>Status</td>
						<td>{html_options id=status name=status options=$statuses selected=$status}</td>
					</tr>
					<tr>
						<td colspan="4" align="right"><input type="submit" name="submit" value="Search"></td>
					</tr>
					
			 	</table>
	  		</form>
 			<table width="50%">
			<tr>
				<th width="20%">Task Name</th>
				<th width="5%">Status</th>
				<th width="10%">Created</th>
				<th width="5%">Estimated</th>
				<th width="20%">Contact Person</th>
				<th width="20%">Contact Number</th>
				<th width="5%">Assigned To</th>
			</tr>
	 		{section name=row loop=$tasks}
				<tr>
					<td><a href="view.php?id={$tasks[row].id}">{$tasks[row].name}<a></td>
					<td>{$tasks[row].status}</td>
					<td>{$tasks[row].created_by} at {$tasks[row].created_time}</td>
					<td>{$tasks[row].estimated}</td>
					<td>{$tasks[row].contact_person}</td>
					<td>{$tasks[row].contact_number}</td>
					<td>{$tasks[row].assigned_to}</td>
				</tr>
	 		{/section}
			</table>
		</div>
	 	{include file="about-us.tpl"}
	</div>
</div>

{include file="footer.tpl"}