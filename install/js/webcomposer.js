function Webcomposer() {
	var dc = '?callback=webcomposer.readDirecotry';
	var bc = '?callback=webcomposer.storeFile';

	var objects = {};
	var log = $( '#log > div');

	function info( msg ) {
		log.append(msg+'<br>');
		$( '#log' ).scrollTop( log.height());
	}

	function error( msg, log ) {
		console.log( log );
		info('<div class="alert alert-danger">'+msg+'</div>');
	}

	this.readDirecotry = function( response ) {
		var url = response.data.url;
		var path = objects[url] ? objects[url] : '';

		for( var i = 0; i < response.data.tree.length; i++ ) {
			var obj = response.data.tree[i];
			objects[obj.url] = path + '/' + obj.path;

			if( obj.type == 'blob' ) $.getScript(obj.url+bc);
			else if( obj.type == 'tree' ) $.getScript(obj.url+dc);
			else error('Unknown Object Type: '+obj.type, obj);
		}
	};

	this.storeFile = function( response ) {
		var obj = response.data;
		var url = obj.url;
		var path = objects[url];

		if( typeof path == 'undefined' )
			error('Path not found.', obj );
		info('  Storing File: '+path);

		$.post(location.href, {
			'path': path,
			'content': obj.content,
			'encoding': obj.encoding
		});
	};

	this.install = function(repoName, tree) {
		if( typeof tree == 'undefined' ) tree = 'master';
		var baseUrl = 'https://api.github.com/repos/'+repoName+'/git/trees/'+tree+dc;

		info('Installing Package: '+repoName );
		$.getScript(baseUrl);
	}
}

var webcomposer = new Webcomposer();
