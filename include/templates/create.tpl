<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Create a Task</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/coolblue.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/coolblue-form.css" />
    
    <script src="js/jquery-1.6.1.min.js"></script>
    <script src="js/jquery.lightbox_me.js"></script>
    <script src="js/scrollToTop.js"></script>
    <script>
    
		$(document).ready(function(){
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
		<ul>
			<li><a href="#">Welcome {$username}</a><span></span></li>
			<li><a href="index.php">Home</a><span></span></li>
			<li><a href="list.php">Task-List</a><span></span></li>
			<li id="current"><a href="create.php">Create</a><span></span></li>
			<li><a href="index.php?action=logout">Logout</a><span></span></li>
		</ul>
	</nav>
	</header>
</div>

<div id="content-wrap">
    <div id="content" class="clearfix">
     <div id="main">
    	<h3>Create a Task</h3>
			<form action="create.php" method="post" enctype="multipart/form-data">
	
	            <div>
	            <label>Name <span class="required">*</span></label>
	            <input name="name" type="text" size="40" value="" />
	            </div>
	
				<div>
	            <label>Due Date (dd-mm-yyyy)<span class="required">*</span></label>
	            <input name="due_date" type="text" id="due_date" size="40" value="" />
	            </div>

				<div>
	            <label>Estimated Price<span class="required">*</span></label>
	            <input name="estimated" type="text" id="estimated" size="40" value="" />
	            </div>

				<div>
	            <label>Contact Person<span class="required">*</span></label>
	            <input name="contact_person" type="text" id="contact_person" size="40" value="" />
	            </div>

				<div>
	            <label>Contact Number<span class="required">*</span></label>
	            <input name="contact_number" type="text" id="contact_number" size="40" value="" />
	            </div>

				<div>
	            <label>Favours<span class="required">*</span></label>
	            <input name="favours" type="text" id="favours" size="40" value="" />
	            </div>
	
	            <div>
	            <label>Description <span class="required">*</span></label>
	            <textarea name="description" rows="20" cols="50" id="description"></textarea><br />
	            </div>

	            <div>
	            <label>Assigned To <span class="required">*</span></label>
	            {html_options id=user name=user options=$users}<br />
	            </div>

	            <div>
	            <label>Image</label>
	            <input type="file" name="image"><br/>
	            </div>
	
	            <div class="no-border">
					<input type="submit"  name="create" value="Submit" class="button">
				</div>
			</form>
    	</div>
		{include file="about-us.tpl"}
    </div>
</div>

{include file="footer.tpl"}