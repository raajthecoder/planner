<div id="extra-wrap"><div id="extra" class="clearfix">
	    <div id="gallery" class="clearfix">
		    <h3>Flickr Photos </h3>
		    <p class="thumbs">
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
            <a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
            </p>
        </div>

	    <div class="col first">

		    <h3>Contact Info</h3>

		    <p>
		    <strong>Phone: </strong>+44 123 0056<br/>
		    <strong>Mobile: </strong>+44 123 0056<br/>
		    </p>

		    <p><strong>Marriage: </strong>
		    <strong>Reception: </strong>
		    </p>

            <h3>Follow us:</h3>

            <ul class="subscribe-stuff">
      	        <li><a title="Facebook" href="index.html" rel="nofollow">
				<img alt="Facebook" title="Facebook" src="images/social_facebook.png" /></a>
			    </li>
			    <li><a title="Twitter" href="index.html" rel="nofollow">
				<img alt="Twitter" title="Twitter" src="images/social_twitter.png" /></a>
			    </li>
			    <li><a title="E-mail this story to a friend!" href="index.html" rel="nofollow">
				<img alt="E-mail this story to a friend!" title="E-mail this story to a friend!" src="images/social_email.png" /></a>
			    </li>
            </ul>
            
            <br/>
            	<script language="JavaScript" src="http://www.counter160.com/js.js?img=6"></script>
    		<br/>
	    </div>

        <div class="col">
            <h3>Recent Comments</h3>
	        <div class="recent-comments">
                <ul>
                	{section name=row loop=$recentcomments}
			        <li><a href="view.php?id={$recentcomments[row].task_id}" title="Comment on title">{$recentcomments[row].comment}</a><br /> &#45; <cite>{$recentcomments[row].name}</cite></li>
                    {/section}
			    </ul>
		    </div>

        </div>

        <div class="col">

            <h3>Recent Task</h3>
	        <div class="footer-list">
			    <ul>
			    	{section name=row loop=$recenttasks}
				    <li><a href="view.php?id={$recenttasks[row].task_id}">{$recenttasks[row].name}</a> &#45; <cite>{$recenttasks[row].status}</cite></li>
				    {/section}
			    </ul>
		    </div>
	    </div>

</div></div>

<!-- footer -->
<footer>
	<p class="footer-left">
		&copy; 2012 Copyright Info &nbsp; &nbsp; &nbsp;
	</p>

	<p class="footer-right">
	   	<a href="index.php">Home</a> |
        <a href="#top" class="back-to-top">Back to Top</a>
    </p>
<!-- /footer -->
</footer>

</body>
</html>