<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title>Installation</title>

	<link rel="stylesheet" href="install/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="install/css/bootstrap-theme.min.css" type="text/css">
	<link rel="stylesheet" href="install/css/webcomposer.css" type="text/css">
</head>
<body>

	<div class="modal" style="display: block">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Installation</h4>
				</div>

				<div class="modal-body">

					<p>Total Progress</p>

					<div class="progress progress-striped active">
						<div id="totalpgrs" class="bar" style="width: 0%; transition: width 0.3s ease 0s;"></div>
					</div>

					<p>Current Package</p>

					<div class="progress progress-striped active">
						<div id="pkgpgrs" class="bar" style="width: 0%; transition: width 0.1s ease 0s;"></div>
					</div>

					<p>Output Log</p>

					<pre class="well" style="height: 100px; overflow: auto; font-size: 10px;" id="log"><div></div></pre>

				</div>

				<div class="modal-footer">
					<button id="migbtn" class="btn btn-danger" onclick="alert('this button dont has any function')">Cancel</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="install/js/jquery.min.js"></script>
	<script type="text/javascript" src="install/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="install/js/webcomposer.js"></script>
</body>
</html>
