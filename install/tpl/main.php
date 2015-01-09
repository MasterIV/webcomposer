<?php include __DIR__.'/header.php'; ?>

<p>Total Progress</p>

<div class="progress progress-striped active">
	<div id="totalpgrs" class="bar" style="width: 0; transition: width 0.3s ease 0s;"></div>
</div>

<p>Current Package</p>

<div class="progress progress-striped active">
	<div id="pkgpgrs" class="bar" style="width: 0; transition: width 0.1s ease 0s;"></div>
</div>

<p>Output Log</p>

<pre class="well" style="height: 130px; overflow: auto; font-size: 10px;" id="log"><div></div></pre>

<?php include __DIR__.'/footer.php'; ?>
