<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>500 - Internal Server Error</title>

		<style>
			body {
				font-family: "Open Sans", arial, sans-serif;
				background: #FFF;
				color: #333;
				margin: 2em;
			}
			a, a:visited {
				color: #4DBCE9;
			}
			a:hover, a:active {
				color: #26ADE4;
			}
			code {
				background: #D1E751;
				padding: 2px 6px;
				border-radius: 4px;
			}
		</style>

		<!--
		- Unfortunately, Microsoft has added a clever new
		- "feature" to Internet Explorer. If the text of
		- an error's message is "too small", specifically
		- less than 512 bytes, Internet Explorer returns
		- its own error message. You can turn that off,
		- but it's pretty tricky to find switch called
		- "smart error messages". That means, of course,
		- that short error messages are censored by default.
		- IIS always returns error messages that are long
		- enough to make Internet Explorer happy. The
		- workaround is pretty simple: pad the error
		- message with a big comment like this to push it
		- over the five hundred and twelve bytes minimum.
		- Of course, that's exactly what you're reading
		- right now.
		-->
	</head>
	<body>
		<h1>Internal Server Error</h1>

		<p>An error occured while we were processing your request.</p>
	</body>
</html>