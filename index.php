<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="scss/app.css"/>
	<title>Jake Klingler | Programmer</title>
	<script src="//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Raleway:200,400']
			}
		});
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-43210809-1']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-43210809-1', 'jakeklingler.com');
		ga('send', 'pageview');
	</script>
</head>
<body>

	<div class="header-top">
		<div class="row text-center header-container">
			<h1>JAKE KLINGLER</h1>
			<img src="http://www.gravatar.com/avatar/307a641b6c78cec6701f87d6c59534b9?s=200"/>
			<h3>I'm a programmer from Columbus, OH.</h3>
		</div>
	</div>

<!-- RESUME -->
	<div class="row">
		<div class="small-6 small-centered columns text-center">
			<h3 class="group-header">RESUME</h3>
			<div class="hrule"><span/></div>
		</div>
		<div class="small-12 large-8 small-centered columns resume-container">
			<h5>OBJECTIVE</h5>
			<p>Seeking a full-time software engineering position after my graduation in December, 2013.</p>

			<h5>EDUCATION</h5>
			<p>
			<strong>B.S. Computer Science &amp; Engineering</strong>, Graduation: Dec, 2013<br/>
			The Ohio State University, Columbus, OH<br/>
			Overall GPA (4.00 scale): 3.5</p>

			<h5>WORK EXPERIENCE</h5>
			<p><strong>Software Developer Intern</strong> (May, 2013 – August, 2013)<br/>
			Epic Systems, Verona, WI<br/>
			Designed and developed MyChart for Windows Phone 8 with two other interns.</p>
			<ul>
				<li class="tech-tags">
					<div>C#</div>
					<div>.NET</div>
					<div>WINDOWS PHONE</div>
				</li>
			</ul>
			<p><strong>Student Programmer</strong> (September, 2009 – February, 2013)<br/>
			The Ohio State University, Libraries Web Implementation Team, Columbus, OH<br/>
			Assisted with design and development of projects for the Libraries Web Team.</p>
			<ul>
				<li class="tech-tags">
					<div>RUBY ON RAILS</div>
					<div>JS/CSS/HTML</div>
				</li>
			</ul>
		</div>
	</div>

<!-- PROJECTS -->
	<div class="row">
		<div class="small-6 small-centered columns text-center">
			<h3 class="group-header">PROJECTS</h3>
			<div class="hrule"><span/></div>
		</div>
	</div>
	<div class="row project-row">
		<div class="small-centered columns">
			<ul class="large-block-grid-2 project-container">
				<li>
					<div class="row">
						<div class="small-4 columns">
							<a href="http://www.epic.com/software-phr.php">
								<img src="img/projects/mychart.svg" alt="MyChart for Windows Phone" type='image/svg+xml' width="100%" height="100%"/>
							</a>
						</div>
						<div class="small-8 columns">
							<a href="http://www.epic.com/software-phr.php">
								<h5>MYCHART WINDOWS PHONE APP</h5>
							</a>
							<p>Epic – (May-Aug 2013)</p>
							<ul>
								<li>MyChart allows patients to access their health information, 
								view test results, send messages to their doctor, refill medications, 
								schedule appointments, etc. from their phone.</li>
								<li class="tech-tags">
									<div>C#</div>
									<div>.NET</div>
									<div>WINDOWS PHONE</div>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="small-4 columns">
							<a href="https://github.com/thearrow/securitysystem-android">
								<img src="img/projects/laser.svg" alt="Laser Tripwire System" type='image/svg+xml' width="100%" height="100%"/>
							</a>
						</div>
						<div class="small-8 columns">
							<a href="https://github.com/thearrow/securitysystem-android">
								<h5>LASER-TRIPWIRE SECURITY SYSTEM</h5>
							</a>
							<p>The Ohio State University – (Feb-Apr 2013)</p>
							<ul>
								<li>Built sensors using Raspberry Pi's and laser pointers that sent a push notification to a mobile Android app when tripped.</li>
								<li>Server/API in Rails, Sensors in Python, MobileApp in JS/CSS/HTML.
								<li class="tech-tags">
									<div>RUBY ON RAILS</div>
									<div>JS/CSS/HTML</div>
									<div>PYTHON</div>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="small-4 columns">
							<a href="https://github.com/thearrow/ai-financialANN">
								<img src="img/projects/ann.svg" alt="Financial Market Neural Network" type='image/svg+xml' width="100%" height="100%"/>
							</a>
						</div>
						<div class="small-8 columns">
							<a href="https://github.com/thearrow/ai-financialANN">
								<h5>FINANCIAL MARKET NEURAL NETWORK</h5>
							</a>
							<p>The Ohio State University – (Feb-Apr 2013)</p>
							<ul>
								<li>Designed and trained a recurrent neural network to predict the short-term movements of financial markets.</li>
								<li>Used PyBrain, pandas, numpy, matplotlib.</li>
								<li class="tech-tags">
									<div>PYTHON</div>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="small-4 columns">
						<a href="http://library.osu.edu/about/map/">
							<img src="img/projects/map.svg" alt="Various Web Projects" type='image/svg+xml' width="100%" height="100%"/>
						</a>
						</div>
						<div class="small-8 columns">
							<a href="http://library.osu.edu/about/map/">
								<h5>VARIOUS WEB PROJECTS</h5>
							</a>
							<p>The Ohio State University Libraries<br/> (Sept 2009 - Feb 2013)</p>
							<ul>
								<li>Assisted with development of several applications for the OSU Libraries:</li>
								<li>An internal scheduling app in Rails, the 
								<a href="http://library.osu.edu/about/map/">library map</a> in JS,  
								<a href="http://library.osu.edu/buckeye-stroll/mobile">Buckeye Stroll</a> 
								mobile app with Appcelerator.</li>
								<li class="tech-tags">
									<div>RUBY ON RAILS</div>
									<div>JS/CSS/HTML</div>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="small-4 columns">
							<a href="img/hoban.png">
								<img src="img/projects/hoban.svg" alt="Reunion Website" type='image/svg+xml' width="100%" height="100%"/>
							</a>
						</div>
						<div class="small-8 columns">
							<a href="img/hoban.png">
								<h5>HIGH SCHOOL REUNION WEBSITE</h5>
							</a>
							<p>Hoban Class of 1970 – (Jul-Aug 2010)</p>
							<ul>
								<li>Designed and built a website for a high school class reunion.</li>
								<li>Users could create accounts and log in, accessing information about the event and classmates.</li>
								<li class="tech-tags">
									<div>JS/CSS/HTML</div>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<div class="row">
						<div class="small-4 columns">
							<a href="img/rateit.png">
								<img src="img/projects/rateit.svg" alt="Rate-It iPhone App" type='image/svg+xml' width="100%" height="100%"/>
							</a>
						</div>
						<div class="small-8 columns">
							<a href="img/rateit.png">
								<h5>RATE-IT IPHONE APP</h5>
							</a>
							<p>Carrick Enterprises – (Jun-Aug 2009)</p>
							<ul>
								<li>Built a simple app for rating user-specified categories of items (e.g. wine, cat food, etc.).</li>
								<li class="tech-tags">
									<div>OBJECTIVE-C</div>
									<div>IPHONE</div>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>	
	</div>

<!-- ABOUT ME -->
	<div class="row">
		<div class="small-6 small-centered columns text-center">
			<h3 class="group-header">ABOUT ME</h3>
			<div class="hrule"><span/></div>
		</div>
		<div class="small-12 large-8 small-centered columns resume-container">
			<h5>ATTITUDE</h5>
			<p>I'm a generalist, familiar with many technologies. <br/>
			If I don't know how to do something, I enjoy (quickly) learning how to do it.<br/>
			I understand that the best programmers are constantly practicing, improving, 
			and sharpening their skills. </p>

			<h5>CLEAN CODE</h5>
			<p>I'm passionate about learning how to craft clean, elegant code.<br/>
			I'm reading books like 
			<a href="http://www.amazon.com/Clean-Code-Handbook-Software-Craftsmanship/dp/0132350882">
			Clean Code</a> and 
			<a href="http://www.amazon.com/The-Pragmatic-Programmer-Journeyman-Master/dp/020161622X">
			The Pragmatic Programmer</a> to try to develop this skill - It's common for me 
			to look at code I wrote a year ago and cringe, 
			thinking: "I would do that so differently now".</p>

			<h5>TECHNOLOGIES</h5>
			<p>I prefer working in a Unix-based environment using expressive languages 
			like Ruby and Python with Git for version control, although I also have experience
			developing in Windows with C# and .NET using Visual Studio.<br/>
			I have decent experience with web development (Rails, JS/CSS/HTML).<br/>
			I first learned programming in Java, so I'm comfortable with it.<br/>
			I'd be open to learning Scala, it appeals to me.</p>
		</div>
	</div>

<!-- LINKS -->
	<div class="row text-center">
		<div class="small-6 small-centered columns">
		<h3 class="group-header">CONTACT &amp; LINKS</h3>
			<div class="hrule"><span/></div>
		</div>
	</div>
	<div class="row text-center">
		<div class="small-10 large-6 small-centered columns">
		<p><a href="mailto:thearrow3456@gmail.com" class="email-me">EMAIL ME</a></p>
			<ul class="small-block-grid-3 link-images">
				<li><a href="http://github.com/thearrow">
						<img src="img/webicon-github.svg" alt="My Github"/></a>
				</li>
				<li><a href="http://careers.stackoverflow.com/jakeklingler">
						<img src="img/webicon-stackoverflow.svg" alt="My StackOverflow"/></a>
				</li>
				<li><a href="http://www.linkedin.com/pub/jake-klingler/78/999/10b">
						<img src="img/webicon-linkedin.svg" alt="My LinkedIn"/></a>
				</li>
				<li><a href="https://www.quora.com/Jake-Klingler">
						<img src="img/webicon-quora.svg" alt="My Quora"/></a>
				</li>
				<li><a href="http://www.goodreads.com/user/show/8126915-jake-klingler">
						<img src="img/webicon-goodreads.svg" alt="My GoodReads"/></a>
				</li>
				<li><a href="http://www.flickr.com/photos/9829286@N07/">
						<img src="img/webicon-flickr.svg" alt="My Flickr"/></a>
				</li>	
			</ul>
		</div>
	</div>

	<!-- FOUNDATION -->
	<script src="js/app.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>