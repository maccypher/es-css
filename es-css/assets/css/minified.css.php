<?php 
	header('Content-type: text/css');
	ob_start("compress");

		function compress($buffer) {
			/* remove comments */
			$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

			/* remove tabs, spaces, newlines, etc. */
			$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

			return $buffer;
		}

		/* css files for compression */
		include('typo.css');
	#	include('font.css');
		include('forms.css');
		include('tables.css');
	#	include('buttons.css');
	#	include('alerts.css');
		include('flat/red.css');
		include('helpers.css');
		include('scaffold.css');
		include('icons.css');
		include('plugins.css');
		include('app.css'); /* last in list to do some overrides maybe */

	ob_end_flush();
?>