<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Viewing {$task.name}</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/coolblue.css" />
    
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
	 		<article class="post">
	 			<div class="primary">
	 				
	 				<h2><a href="index.html">{$task.name}</a></h2>
	 				<p class="post-info"><span>for</span> {$task.assigned_to}</p>
	 				<div class="image-section">
              		    <img src="{$task.image}" alt="image post" height="206" width="498"/>
         	        </div>
         	        
         	        <p>{$task.description} </p>
         	        <p>
         	        	Contact Person: {$task.contact_person} <br>
         	        	Contact Number: {$task.contact_number} <br>
         	        </p>
         	        <p>
         	        	Last Updated at {$task.updated}
					</p>
         	        
         	        <p><a class="more" href="edit.php?id={$task.id}">Edit &raquo;</a></p>
	 			</div>
	 			
	 			<aside>
            	    <p class="dateinfo">{$task.created_MMM}<span>{$task.created_D}</span></p>
               	    <div class="post-meta">
                  	    <h4>Task Info</h4>
                     	<ul>
                           <li class="user"><a href="#">{$task.created_by}</a></li>
                           <li class="time"><a href="#">{$task.created_time}</a></li>
                           <li class="comment"><a href="#">{$total_comments} Comments</a></li>
                           <li class="dollar"><a href="#">{$task.estimated}</a></li>
                           <li class="permalink"><a href="#">{$task.status}</a></li>
                           <li class="due"><a href="#">{$task.due_date}</a></li>
                        </ul>
					</div>
                </aside>
	 		</article>
	 		
	 		
	 		<div class="post-bottom-section">
	 			 <h4>{$total_comments} comments</h4>
	 			 <div class="primary">
	 			 	<ol class="commentlist">
	 			 		<li class="depth-1">
	 			 			{section name=row loop=$comments}
							<div class="comment-info">
								<img alt="" src="images/{$comments[row].name}.jpg" class="avatar" height="42" width="42" />
								<cite>
									<a href="#">{$comments[row].name}</a> Says: <br />
									<span class="comment-data"><a href="#comment-63" title="">{$comments[row].date}</a></span>
								</cite>
							</div>

							<div class="comment-text">
								<p>{$comments[row].comment}</p>
							</div>
							{/section}
							
							
							<form action="view.php" method="post">
							<div class="comment-text">
								<textarea name="comment" rows="3" cols="58" id="comment" ></textarea><br />
								<div class="reply">
									<input type="submit" name="reply" value="Comment">
		 						</div>
							</div>
							<input type="hidden" name="task_id" value="{$task_id}" />
							</form>
							
							
						</li>
					</ol>
	 			 </div>
	 		</div>
 		</div>
	{include file="about-us.tpl"}
	</div>
</div>
</div>

{include file="footer.tpl"}