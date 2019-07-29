@extends('header')

@section('content') 

 <center> <h2 id="headline"><b> Home </b></h2> </center> 

<section class="section" style="background:magenta">
	<div class="container is-centered page">
		<div class="content">
			<center><h2 style="font-size:100px; text-shadow:0 6px black; color:lightgreen; "> 
					<i>The</i> United Front for Transformation <br><i>(UTF) </i>
			</h2> </center>
			<div id="discourse-comments"></div>

<script type="text/javascript">
DiscourseEmbed = {
    discourseUrl: "#",
    discourseEmbedUrl: "#"
};

(function() {
    var d = document.createElement("script"); d.type = "text/javascript"; d.async = true;
    d.src = DiscourseEmbed.discourseUrl + "javascripts/embed.js";
    (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(d);
})();
</script>

		</div>
	</div>
</section>

		<footer class="footer">
			<div class="container">
				<div class="content has-text-centered" style="background:black; color:white; text-align:center;">
					<p> Copyright &copy; 2019 <a href="home">The United Front for Transformation </a> </p>
					<p> group <a href="#">15</a>, <a href="#">recess project</a>, <a href="#">Makerere</a>. </p>
					<p> <a class="nav-link" href="http://localhost:8000" hreflang="en-us"></a> </p>
				</div>
			</div>
		</footer>

		<script>
            document.addEventListener('DOMContentLoaded', function () { 
                
                var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0); 
                
                if ($navbarBurgers.length > 0) {
 
                    $navbarBurgers.forEach(function ($el) {
                        $el.addEventListener('click', function () {
 
                            var target = $el.dataset.target;
                            var $target = document.getElementById(target);
 
                            $el.classList.toggle('is-active');
                            $target.classList.toggle('is-active'); 

                            document.getElementById('navbar-background').classList.toggle('is-active'); 
                        });
                    });
                }

            });
		</script>
 @endsection

