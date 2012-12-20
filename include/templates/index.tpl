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
			$('#qsearch').focus(function() {
				var searchText = $('#qsearch').val();
				if(searchText == "Search...") {
			  		$('#qsearch').val('');
		  		}
     		});
     		
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
			<li id="current"><a href="index.php">Home</a><span></span></li>
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
 			<div align="right">
 			<form name="sort_form" id="sort_form" method="post" action="index.php">
 				{html_options id=filter name=filter options=$filter_select selected=$filter onchange="document.sort_form.submit();"}
 			</form>
 			</div>
 			
	 		{section name=row loop=$tasks}
	 		<article class="post">
	 			<div class="primary">
	 				
	 				<h2><a href="index.php">{$tasks[row].name}</a></h2>
	 				<p class="post-info"><span>for</span> {$tasks[row].assigned_to}</p>
	 				<div class="image-section">
              		    <img src="{$tasks[row].image}" alt="image post" height="300" width="498"/>
         	        </div>
         	        
         	        <p>{$tasks[row].description} </p>
         	        <p>
         	        	Contact Person: {$tasks[row].contact_person} <br>
         	        	Contact Number: {$tasks[row].contact_number} <br>
         	        </p>
         	        <p>
         	        	Last Updated at {$tasks[row].updated}
					</p>
         	        
         	        <p><a class="more" href="view.php?id={$tasks[row].id}">Continue Reading &raquo;</a>
         	        <a class="more" href="edit.php?id={$tasks[row].id}">Edit &raquo;</a></p>
	 			</div>
	 			
	 			<aside>
            	    <p class="dateinfo">{$tasks[row].created_MMM}<span>{$tasks[row].created_D}</span></p>
               	    <div class="post-meta">
                  	    <h4>Task Info</h4>
                     	<ul>
                           <li class="user"><a href="#">{$tasks[row].created_by}</a></li>
                           <li class="time"><a href="#">{$tasks[row].created_time}</a></li>
                           <li class="comment"><a href="view.php?id={$tasks[row].id}">{$tasks[row].comments} Comments</a></li>
                           <li class="dollar"><a href="#">{$tasks[row].estimated}</a></li>
                           <li class="permalink"><a href="#">{$tasks[row].status}</a></li>
                           <li class="due"><a href="#">{$tasks[row].due_date}</a></li>
                        </ul>
					</div>
                </aside>
	 		</article>
	 		{/section}
	 	</div>
		
		{include file="about-us.tpl"}
	</div>
</div>


<div id="login-div">
<form name="auth_form" method="post" action="login.php">
	<div style="padding: 100px 0 0 250px;">
	<div id="login-box">
	
		<h2>Login</h2>
		
		<div id="login-box-name" style="margin-top:20px;">Email:</div>
		<div id="login-box-field" style="margin-top:20px;">
			<input name="username" class="form-login" title="Username" value="" size="30" maxlength="2048" />
		</div>
		
		<div id="login-box-name">Password:</div>
		<div id="login-box-field">
			<input name="passwd" type="password" class="form-login" title="Password" value="" size="30" maxlength="2048" />
		</div><br/>
	
		<span class="login-box-options">
			<input type="checkbox" name="remember"> Remember Me 
			<a href="#" style="margin-left:30px;">Forgot password?</a>
		</span><br/><br/>

		<input type="image" id="login-img" src="images/login-btn.png" width="103" height="42" style="margin-left:90px;" onclick="document.auth_form.submit();" />
	</div>
	</div>
</form>
</div>

{include file="footer.tpl"}