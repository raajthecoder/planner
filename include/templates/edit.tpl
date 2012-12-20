<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Viewing {$task.name}</title>
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
		{if isset($username)}
		<ul>
			<li><a href="#">Welcome {$username}</a><span></span></li>
			<li><a href="index.php">Home</a><span></span></li>
			<li><a href="list.php">Task-List</a><span></span></li>
			<li><a href="create.php">Create</a><span></span></li>
			<li id="current"><a href="view.php?id={$task.id}">View</a><span></span></li>
			<li><a href="index.php?action=logout">Logout</a><span></span></li>
		</ul>
		{else}
		{/if}
	</nav>
	</header>
</div>


<div id="content-wrap">
    <div id="content" class="clearfix">
     <div id="main">
    	<h3>Edit the Task</h3>
			<form action="edit.php" method="post">
	
	            <div>
	            <label>Name <span class="required">*</span></label>
	            <input name="name" type="text" size="40" value="{$task.name}" />
	            </div>

	            <div>
	            <label>Status<span class="required">*</span></label>
	            {html_options name=status options=$statuses selected=$task.status}
	            </div>
	
				<div>
	            <label>Due Date (dd-mm-yyyy)<span class="required">*</span></label>
	            <input name="due_date" type="text" id="due_date" size="40" value="{$task.due_date}" />
	            </div>

				<div>
	            <label>Estimated Price<span class="required">*</span></label>
	            <input name="estimated" type="text" id="estimated" size="40" value="{$task.estimated}" />
	            </div>

				<div>
	            <label>Contact Person<span class="required">*</span></label>
	            <input name="contact_person" type="text" id="contact_person" size="40" value="{$task.contact_person}" />
	            </div>

				<div>
	            <label>Contact Number<span class="required">*</span></label>
	            <input name="contact_number" type="text" id="contact_number" size="40" value="{$task.contact_number}" />
	            </div>

				<div>
	            <label>Favours<span class="required">*</span></label>
	            <input name="favours" type="text" id="favours" size="40" value="{$task.favours}" />
	            </div>

				<div>
	            <label>Image<span class="required">*</span></label>
	            <input name="image" type="text" id="image" size="40" value="{$task.image}" />
	            </div>
	
	            <div>
	            <label>Description <span class="required">*</span></label>
	            <textarea name="description" rows="20" cols="50" id="description">{$task.description}</textarea><br />
	            </div>

	            <div>
	            <label>Description <span class="required">*</span></label>
				{html_options id=user name=user options=$users selected=$task.user}<br />
	            </div>
	
	            <div class="no-border">
					<input type="submit"  name="edit" value="Submit" class="button">
				</div>
			<input type="hidden" name="task_id" value="{$task_id}" />
			</form>
    	</div>
		{include file="about-us.tpl"}
    </div>
</div>

{include file="footer.tpl"}
