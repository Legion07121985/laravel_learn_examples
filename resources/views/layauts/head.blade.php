@section('head')
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
	<meta name="content-language" content="en">
	<meta property="og:type" content="website">
			{{-- <meta property="og:image" content="https://d2x3xhvgiqkx42.cloudfront.net/bcfa7c0f-8d12-4f3d-a505-066aaea510e7/2016/06/21/4ece25ed-ffe7-450b-a9c6-3a1b183f3f8c.jpg"> --}}
		<meta name="fragment" content="!">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

{{--<script async="" src="https://s.pinimg.com/ct/lib/main.2a04f3ee.js"></script>
<script async="" src="//connect.facebook.net/en_US/fbevents.js"></script>
<script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script>
<script type="text/javascript" async="" src="https://cdn.taboola.com/libtrc/unip/1316991/tfa.js"></script>
<script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script>
<script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script>
<script type="text/javascript" async="" src="https://s.pinimg.com/ct/core.js"></script>
<script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script>
<script type="text/javascript" async="" src="//bat.bing.com/bat.js"></script>
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/a7xT2d71Jli62wQMfeUUrLcO/recaptcha__uk.js" crossorigin="anonymous" integrity="sha384-ujQOc42NR8zvj2+h5nAhtcKzhxA5xfO90cQ+3of0wU7eOJuTtDhUkim74MoDOKaK"></script>
<script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-MDD5C4"></script>
<script type="text/javascript" async="" src="https://stats.g.doubleclick.net/dc.js"></script>
<script src="https://polyfill.parastorage.com/v3/polyfill.min.js?features=es2017"></script>--}} 


	<link rel="stylesheet" href="public/css/answers-icons.css">

	<link rel="stylesheet" href="public/css/concat.css">

	<script>
	window.prerenderReady = false;
	</script>


{{--	<meta name="google-site-verification" content="caM2lnCRLah4A1mGepO9qL_hg8cqHdh3UzqMkNMaNAA">

 <script src="https://apps.wix.com/answers-wix-integration/cookie-policy/consent-manager.js"></script>
<script src="https://apps.wix.com/answers-wix-integration/cookie-policy/tag-manager.js"></script>
<script src="https://apps.wix.com/answers-wix-integration/cookie-policy/en/setup.js"></script> --}}
	
{{--	<!-- TODO - do this in a more elegant way  -->
	<script>
		var url = document.location.href;
		var hasHashInTheEnd = !!url.match(/#$/);
		if (hasHashInTheEnd) {
			document.location.href = url.replace('#', '');
		}
	</script>

	<script type="text/javascript">
  (function () {
    var appName = 'answers-helpcenter';
    window.fedops = window.fedops || {};
    window.fedops.apps = window.fedops.apps || {};
    window.fedops.apps[appName] = { startLoadTime: window.performance && window.performance.now() };
    try { window.fedops.sessionId = window.localStorage.getItem('fedops.logger.sessionId'); } catch(e) {};
    window.fedops.sessionId = window.fedops.sessionId || 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) { var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8); return v.toString(16); });
    (new Image()).src = '//frog.wix.com/fed?appName=' + appName + '&src=72&evid=14&session_id=' + window.fedops.sessionId;
  })();
</script> --}}


	<base href="/"> 

			 {{--<link rel="shortcut icon" href="//d2x3xhvgiqkx42.cloudfront.net/c9645f94-44fe-471f-91a6-7d149990294c/fe530f09-2c30-4961-9b6c-fd31994bc804/2018/02/20/6ffaa310-09ae-4e40-8a42-fb9f55083cb3.png" type="image/x-icon">--}}
			 {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300,100italic,100&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic" rel="stylesheet" type="text/css"> --}}
		
				<style>
	body {
		font-family: 'Roboto', sans-serif;
	}
	</style>

	
			 {{--<link rel="stylesheet" type="text/css" href="https://d2x3xhvgiqkx42.cloudfront.net/bcfa7c0f-8d12-4f3d-a505-066aaea510e7/bcfa7c0f-8d12-4f3d-a505-066aaea510e7/2018/03/05/2139d5e1-46d6-4350-a417-5553fc9d5070.css">--}}
			<link rel="stylesheet" type="text/css" href="css/2139d5e1-46d6-4350-a417-5553fc9d5070.css">
	
		{{--<script src="//static.parastorage.com/services/answers-public-statics/1.758.0/head-lib.js"></script><style data="branded-style">--}}
			{{-- <script src="css/js/head-lib.js"></script> --}}
			 <link rel="stylesheet" type="text/css" data="branded-style" href="css/branded-style.css">
			
			 {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
			 {{-- <script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/819384062/?random=1615452077541&amp;cv=9&amp;fst=1615452077541&amp;num=1&amp;label=_2AsCJvP16cBEP6d24YD&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;eid=376635471&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1053&amp;u_aw=1920&amp;u_cd=24&amp;u_his=13&amp;u_tz=120&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;gtm=2wg330&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Facademy.wix.com%2Fen%2Farticle%2Fthe-pages-and-sections-every-website-needs&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Wix%20Content%20Hub&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script> --}}
			 {{-- <meta http-equiv="origin-trial" content="A7iusd6XVbb7SOF83vXQdziVdvBy4R7Bh2tuVErLbKXxemIjQH20g7jWaz48nG08Cd6zfylzuF+H+1s9S3JodAEAAACOeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGVhZHNlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="> --}}
			 {{-- <script src="https://www.googleadservices.com/pagead/conversion/1006927621/?random=1615452077545&amp;cv=9&amp;fst=1615452077545&amp;num=1&amp;value=0&amp;label=Jza8CKKX8MgBEIX-keAD&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1053&amp;u_aw=1920&amp;u_cd=24&amp;u_his=13&amp;u_tz=120&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;gtm=2wg330&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Facademy.wix.com%2Fen%2Farticle%2Fthe-pages-and-sections-every-website-needs&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Wix%20Content%20Hub&amp;hn=www.googleadservices.com&amp;bttype=purchase&amp;async=1&amp;rfmt=3&amp;fmt=4"></script> --}}
			 {{-- <script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/642100862/?random=1615452077549&amp;cv=9&amp;fst=1615452077549&amp;num=1&amp;label=7C_FCLqootIBEP7clrIC&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1053&amp;u_aw=1920&amp;u_cd=24&amp;u_his=13&amp;u_tz=120&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;gtm=2wg330&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Facademy.wix.com%2Fen%2Farticle%2Fthe-pages-and-sections-every-website-needs&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;tiba=Wix%20Content%20Hub&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script> --}}
			 {{-- <script src="https://obs.cheqzone.com/ct?id=4960&amp;url=https%3A%2F%2Facademy.wix.com%2Fen%2Farticle%2Fthe-pages-and-sections-every-website-needs%23pages-your-website-cant-do-without&amp;sf=0&amp;tpi=&amp;ch=&amp;tsf=0&amp;tsfmi=&amp;tsfu=&amp;cb=1615452077623&amp;hl=13&amp;op=0&amp;ag=2950888798&amp;rand=731505126611009571520501807879009881901186703915615112657160191568&amp;fs=1365x949&amp;fst=1365x949&amp;np=linux%20x86_64&amp;nv=google%20inc.&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;ss=1920x1080&amp;nc=0&amp;at=&amp;di=W1siZWYiLDQwNl0sWzEyLCJ7XCJjdHhcIjpcIndlYmdsXCIsXCJ2XCI6XCJnb29nbGUgaW5jLlwiLFwiclwiOlwiYW5nbGUgKGludGVsIG9wZW4gc291cmNlIHRlY2hub2xvZ3kgY2VudGVyLCBtZXNhIGRyaSBpbnRlbChyKSBoZCBncmFwaGljcyA0NjAwIChoc3cgZ3QyKSwgb3BlbmdsIDQuNSBjb3JlKVwiLFwic2x2XCI6XCJ3ZWJnbCBnbHNsIGVzIDEuMCAob3BlbmdsIGVzIGdsc2wgZXMgMS4wIGNocm9taXVtKVwiLFwiZ3ZlclwiOlwid2ViZ2wgMS4wIChvcGVuZ2wgZXMgMi4wIGNocm9taXVtKVwiLFwiZ3ZlblwiOlwid2Via2l0XCIsXCJiZW5cIjo4LFwid2dsXCI6MSxcImdyZW5cIjpcIndlYmtpdCB3ZWJnbFwiLFwic2VmXCI6MjkyODI2MzM5MyxcInNlY1wiOlwiXCJ9Il0sWyJjYiIsIjAsMCwwLDAsMiwwLDAsMCwwLDIsMCwwLDksMCwwLDAsMCwwLDAsMCwwLDAsMCwwLDAsMCwwLDAsMSwwLDAsMCwwLDAsMCwwLDAsMCwwLDAsMCwwLDAsMCwwLDAsMCwwLDEsMCwwLDAsMSwwLDAsMCwwLDAsMCwwLDAsMCwwLDAsMCwwIl0sWy0xLCItIl0sWy0yLCI4LFRqQWtRSVdseUx0QlJva2VCdUxSUW9Ea1VLRkFzdXhUWEJ2VUJ4S0ZZS2dRQWhic1JsczFtZEhibnkydjl6N3N3a0c2UDh2di9KWno1M1puWjJNbk9mZWM1enpuUE8reTZCWDMiXSxbLTMsIltcImludGVybmFsLXBkZi12aWV3ZXJcIixcIm1oamZibWRnY2ZqYmJwYWVvam9mb2hvZWZnaWVoamFpXCIsXCJpbnRlcm5hbC1uYWNsLXBsdWdpblwiXSJdLFstNCwiLSJdLFstNSwiLSJdLFstNiwie1wid1wiOltcIjBcIixcInByZXJlbmRlclJlYWR5XCIsXCJjb25zZW50UG9saWN5TWFuYWdlclwiLFwid2l4VGFnTWFuYWdlclwiLFwiaG9zdE5hbWVzXCIsXCJ1cmxcIixcImhhc0hhc2hJblRoZUVuZFwiLFwiZmVkb3BzXCIsXCIkXCIsXCJqUXVlcnlcIixcIm5nRmlsZVVwbG9hZFwiLFwiU2VsZWN0MlwiLFwiYW5ndWxhclwiLFwiRmlsZUFQSVwiLFwibW9tZW50XCIsXCJtQ3VzdG9tU2Nyb2xsYmFyXCIsXCJqUXVlcnkyMTQwMzU4MTcwMzQwNjA3Mjk2MVwiLFwicmVxdWlyZVwiLFwiX19leHRlbmRzXCIsXCJfX2Fzc2lnblwiLFwiX19yZXN0XCIsXCJfX2RlY29yYXRlXCIsXCJfX3BhcmFtXCIsXCJfX21ldGFkYXRhXCIsXCJfX2F3YWl0ZXJcIixcIl9fZ2VuZXJhdG9yXCIsXCJfX2V4cG9ydFN0YXJcIixcIl9fY3JlYXRlQmluZGluZ1wiLFwiX192YWx1ZXNcIixcIl9fcmVhZFwiLFwiX19zcHJlYWRcIixcIl9fc3ByZWFkQXJyYXlzXCIsXCJfX2F3YWl0XCIsXCJfX2FzeW5jR2VuZXJhdG9yXCIsXCJfX2FzeW5jRGVsZWdhdG9yXCIsXCJfX2FzeW5jVmFsdWVzXCIsXCJfX21ha2VUZW1wbGF0ZU9iamVjdFwiLFwiX19pbXBvcnRTdGFyXCIsXCJfX2ltcG9ydERlZmF1bHRcIixcIl9fY2xhc3NQcml2YXRlRmllbGRHZXRcIixcIl9fY2xhc3NQcml2YXRlRmllbGRTZXRcIixcIl9fU0VOVFJZX19cIixcImFuc3dlcnNTZGtcIixcIl9fY29yZS1qc19zaGFyZWRfX1wiLFwiY29yZVwiLFwiYnJhbmRpbmdcIixcImNvbnRhY3RTZXR0aW5nc1wiLFwiZGVmYXVsdEJyYW5kaW5nXCIsXCJnZXRQYXJhbWV0ZXJCeU5hbWVcIixcInJhd09sZEJyYW5kaW5nXCJdLFwiblwiOltdLFwiZFwiOltdfSJdLFstNywiLSJdLFstOCwiLSJdLFstOSwiKyJdLFstMTAsIi0iXSxbLTExLCJ7XCJ0XCI6XCJcIixcIm1cIjpbXX0iXSxbLTEyLCJudWxsIl0sWy0xMywiLSJdLFstMTQsIi0iXSxbLTE1LCItIl0sWy0xNiwiMCJdLFstMTcsIjQiXSxbLTE4LCJbMCwwLDAsMV0iXSxbLTE5LCJbMjcsMCwyNywwLDI3LDAsMSwyNCwyNCxcIi1cIiwxOTIwLDEwNTMsMTkyMCwxMDgwLDE5MjAsMTA1MywxMzY1LDk0OSwwLDAsMCwwLFwiLVwiLFwiLVwiXSJdLFstMjAsIjEzNzI0NTA0OTQuMTYxNTQ1MTI3MSJdLFstMjEsIi0iXSxbLTIyLCJbXCJyXCIsXCJyXCJdIl0sWy0yMywiKyJdLFstMjQsIltdIl0sWy0yNSwiLSJdLFstMjYsIntcInRqaHNcIjo0MzU5NTk2NixcInVqaHNcIjozMjY4OTY0MixcImpoc2xcIjoyMTcyNjQ5NDcyfSJdLFstMjcsIls1MCw2LjksMCxcIjRnXCIsbnVsbF0iXSxbLTI4LCJ1ay1VQSx1ayxlbi1VUyxlbixydSJdLFstMjksIi0iXSxbLTMwLCJbXCJ2XCIsMF0iXSxbLTMxLCJmYWxzZSJdLFstMzIsIjAiXSxbLTMzLCItIl0sWy0zNCwiLSJdLFstMzUsIlsxNjE1NDUyMDc3NjE2LC0yXSJdLFstMzYsIltcIjE2LzlcIixcIjE2LzlcIl0iXSxbLTM3LCItMTQ0LTU0LTE4MC0iXSxbLTM4LCJpLC0xLC0xLDMsMCwwLDAsMCwwLDM4NCwtMSwwLDEwODMuMjMsMTE1Ny41NiwxNDYzLDE0NjQiXSxbLTM5LCJbXCIyMDAzMDEwN1wiLDQsXCJHZWNrb1wiLFwiTmV0c2NhcGVcIixcIk1vemlsbGFcIixudWxsLG51bGwsdHJ1ZSw4LGZhbHNlLG51bGwsM10iXSxbLTQwLCIzMyJdLFstNDEsIi0iXSxbLTQyLCIxNzI0Mjk3NjUzIl0sWy00MywiMDAwMDAwMDEwMTAwMDAwMTAwMTExMDExMDAiXSxbLTQ0LCIwLDAsMCw1Il0sWy00NSwiNjIwLDY3OCwwLDAsMCw1NjEsNzYyLDAsNjQ4LDAsMCwwLDAsMCwwLDAsMCwwLDAsMCwwLDAsMCwwLDAsMCwwLDAsMCwwLDAsMCJdLFstNDYsIjAiXSxbLTQ3LCJFdXJvcGUvS2lldix1ayxsYXRuLGdyZWdvcnkiXSxbLTQ4LCIwLDAiXSxbLTQ5LCItIl0sWyJkZGIiLCIwLDgsMCwwLDAsNCwwLDAsMCwxLDAsMCwwLDAsMCwwLDAsMCwwLDAsMCwxLDAsMCwwLDAsMCwwLDAsMCwwLDEsMCwwLDAsMSwwLDEsMCwwLDAsMCwwLDEsMiwwLDAsMCwwIl0sWyJibmNoIiwzN10sWyJhYm5jaCIsMzddXQ%3D%3D&amp;dep=0&amp;pre=0&amp;sdd=%7B%7D&amp;cri=cWeXI1b1E5&amp;pto=1470&amp;ver=41&amp;gac=1372450494.1615451271&amp;mei=&amp;ap=&amp;duid=&amp;suid=&amp;tuid=&amp;fbc=-&amp;gtm=W10%3D&amp;it=39%2C1297%2C23&amp;fbcl=-&amp;gacl=&amp;gacsd=-"></script> --}}
			 {{-- <link rel="alternate" hreflang="x-default" href="https://academy.wix.com/en/article/the-pages-and-sections-every-website-needs"> --}}
			 {{-- <link rel="alternate" hreflang="en" href="https://academy.wix.com/en/article/the-pages-and-sections-every-website-needs"> --}}
			 {{-- <meta name="og:title" content="The Pages And Sections Every Website Needs | Website Building | Wix Academy"> --}}
			 {{-- <meta name="twitter:title" content="The Pages And Sections Every Website Needs | Website Building | Wix Academy"> --}}
			 {{-- <link rel="canonical" href="https://academy.wix.com/en/article/the-pages-and-sections-every-website-needs#pages-your-website-cant-do-without"> --}}

<style type="text/css">
 .container {
     margin: 30px;
     width: 67%;
     border: 1px dashed lightgray;
     margin-top: 90px;
     padding: 20px;
     padding-left: 40px;
 }
</style>
@endsection