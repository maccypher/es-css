# es:CSS
## essential CSS framework

This framework is inspired by iKreativ - Workless. I don't wanna present just another clone/fork of "Workless". That's why I built it from scratch, took some of the concepts from iKreativ, adopted some of the techniques and spiced it up with some own knowledge.


## License

This software is licensed under the 

[Don't Be A Dick Licens](dbad_license.md)

----

# To Do:
### Lots of conceptual work left ...

* ~~bring concept of basic folder structure to an end~~
* ~~figure out the essentially needed files~~
* ~~create a simple design with extrem usability~~
* WIP: keep basic files as generic as possible

#### Release v0.1

* initial commit

----


## Folder Structure
/root

* assets
	+ css
	+ font
	+ img
	+ js

#### [assets/css/](assets/css/)

Contains all basic CSS files. Put your custom / app specific CSS files in here. The folder contains a php file: "**[minified.css.php](assets/css/minified.css.php)**". If you host your project on php supported webspace, you can use this php file to minify all you CSS.

Instead of of using:

	...
	<link href="assets/css/typo.css" rel="stylesheet">
	<link href="assets/css/forms.css" rel="stylesheet">
	<link href="assets/css/tables.css" rel="stylesheet">
	<link href="assets/css/helpers.css" rel="stylesheet">
	<link href="assets/css/scaffold.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<link href="assets/css/plugins.css" rel="stylesheet">
	<link href="assets/css/buttons.css" rel="stylesheet">
	...
	
you can keep it short in just on line in your HTML:

	...
	<link href="assets/css/minified.css.php" rel="stylesheet">
	...
	
To add your custom CSS file into the minifier add it at the end, but right before the "**ob_end_flush();**" function. Like this:

	include('your_custom_css.css');
	
	
#### [assets/fonts/](assets/fonts/)

This folder contains the basically the FontAwesome icon font file. If needed you could put your custom font files in here. But **don't forget to link them**! This wont happen automatically. ;)


#### [assets/img/](assets/img/)

The **img/** folder only contains the sprite image for "**uniform**" form styling.
You can find the PSD resource of the used uniform sprite in the "**[src/](src/)**" folder.

#### [assets/js/](assets/js/)

4 files are located here:

	jquery-2.0.2.min.js
	
Of course jQuery. It's basically needed for "**uniform.js**".

	jquery.uniform.min.js
	
This jQuery plugin styles all form elements in a sexy way. But the best thing is, that it styles form elements cross-browser compatible.

	modernizr.min.js
	
Modernizr is needed to enable HTML5 & CSS3 features in old browsers.

	app.js

If you need to put some custom javascript somewhere, this is the right place. Initially the file holds some instructions to init uniform.js, but you can extend it as you like.


<<<<<<< HEAD
----
=======
* initial commit
>>>>>>> c95beea84d32bab8bccd4dcae8870c5e0f3f9491
