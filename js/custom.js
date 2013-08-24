//webfonts
WebFont.load({
	google: {
		families: ['Raleway:200,400']
	}
});

//google analytics (ga.js)
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-43210809-1']);
_gaq.push(['_trackPageview']);
(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

//google analytics (analytics.js)
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-43210809-1', 'jakeklingler.com');
ga('send', 'pageview');

function trackOutboundLink(link, category, action) { 
	try { 
		_gaq.push(['_trackEvent', category , action]); 
	} catch(err){}
	setTimeout(function() {
		document.location.href = link.href;
	}, 100);
}