# es:CSS
## Essential CSS Framework

This framework is inspired by iKreativ - Workless. I don't wanna present just another clone/fork of "Workless". That's why I built it from scratch, took some of the concepts from Workless, adopted some of the techniques and spiced it up with some own knowledge.

To see the implemented features in a life demo, head over to the project page:

<http://willdesignforfood.de/es-css/>

## Features

* supports fluid, no fixed-width webpages
* unified form element for all browsers

----

## License

This software is licensed under the 

[Don't Be A Dick License](dbad_license.md)

----

## Releases

#### Release v0.2

* **[NEW]** Tooltips and Notification Badges added
* **[ENHANCEMENT]** refactored button-background / -color combinations
* **[ENHANCEMENT]** unified color classes / color-class combinations


#### Release v0.1

* initial commit

----


### Folder Structure & Contents

	/root
		 /assets
				/css
				/font
				/img
				/js


#### [assets/css/](es-css/assets/css/)

Contains all basic CSS files. The folder contains a php file: "**[minified.css.php](es-css/assets/css/minified.css.php)**". If you host your project on php supported webspace, you can use this php file to minify all your CSS on the fly.

#### [assets/fonts/](es-css/assets/fonts/)

This folder contains the FontAwesome icon font file. If needed you could put your custom font files in here. But **don't forget to link them**! Referencing wont happen automatically. ;)

#### [assets/img/](es-css/assets/img/)

The **img/** folder only contains the sprite image for "**uniform**" jquery extension to style form elements.
You can find a PSD resource of the used uniform sprite in the "**[src/](src/)**" folder too.

#### [assets/js/](es-css/assets/js/)

###### jquery-2.0.2.min.js

The jQuery library. It's basically needed for the **uniform** extension.

###### jquery.uniform.min.js

This jQuery extension styles all form elements in a sexy way and it's cross-browser compatible. So your forms will look unified in all browsers.

###### modernizr.min.js

Modernizr is needed to enable HTML5 & CSS3 features in old browsers. This library is optional.

###### app.js

If you need to put some custom javascript somewhere, this is the right place. Initially the file holds some instructions to initialize the **uniform jquery extension**, but you can extend it as you like.

----

## -- Installation --

##### Installing *es:CSS* is as easy as it can be: 

Just drop the needed parts or even all files from the `assets/` folder into your project folder and reference the files in your html.

That's it!

----

### Install Notes

#### Referencing the CSS files

Referencing the CSS can be done in different ways:

##### Oldschool:

	...
	<link href="assets/css/typo.css" rel="stylesheet">
	<link href="assets/css/forms.css" rel="stylesheet">
	<link href="assets/css/tables.css" rel="stylesheet">
	<link href="assets/css/helpers.css" rel="stylesheet">
	<link href="assets/css/scaffold.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<link href="assets/css/buttons.css" rel="stylesheet">
	...

##### Newschool:

	@import: url(typo.css);
	@import: url(forms.css);
	@import: url(tables.css);
	@import: url(helpers.css);
	@import: url(scaffold.css);
	@import: url(icons.css);
	@import: url(buttons.css);
	...

##### Pretty cool:

	...
	<link href="assets/css/minified.css.php" rel="stylesheet">
	...

With this amazing little php script, you can easily minify all your css files on the fly without loosing the development status. You don't have to care about minification of your css and minify them by hand everytime you modified something.

Inside the script you can easily load all needed css files. To add your own custom CSS file into the minifier, simply add it to the end, right before the "**ob_end_flush();**" function is called. Like this:

	<?php
		...
		include('your_custom_style.css');
		ob_end_flush();
	?>

### Javascript Libraries

To style form elements with **es:CSS** you need a jquery library. At least Version 1.10.x. Included in the **es:CSS** package is jquery in version 2.0.2.

Furthermore you need the **jquery.uniform.min.js** to style form elements (radio buttons, checkboxes and so on).
**es:CSS** includes two more javascript files:

* app.js (contains custom JS commands and the **uniform style initialization**)
* modernizr.min.js (optional needed to support older browsers)
	
If you don't want to support old browsers simply drop modernizr.
And if form element styling isn't necessary for your project, drop every other JS library too.

#### IMPORTANT NOTE:

If you'd like to style form elements, you have to keep the following order while referencing the JS libraries in your html file `<head>`:

1. link the **uniform.default.css** at the very first
2. now load the **jquery** library
3. after this, load the **jquery.uniform.min.js** extension
4. and last, but not least load the initialization script (**app.js**) or just call it directly in your `<head>` tag:

Example:
	
	<link href="assets/css/uniform.default.css" rel="stylesheet">
	<script src="assets/js/jquery-2.0.2.min.js"></script>
	<script src="assets/js/jquery.uniform.min.js"></script>
	<script src="assets/js/app.js"></script>

----

### Size matters!

The very essential integration without icons and form styling will cost you only **32kB** of pure CSS! In words: **thirty two**!

Even a full featured integration including form styling and icon support will cost you only less than **500kB** (486kb to be exact).

----

# CSS Class Definitions (Cheat Sheet)

First things first: in es:CSS nothing is engraved in stone! It's a basic setup to save you time and helps prevent basic or repetitive tasks.

You extend it, modify it or just strip it in the way you want. It's easy to do this because everything happens in the CSS files.

All CSS files are named like what they do:

* **scaffold.css** keeps basic definitions about basic elements like `<body>`, `<header>`, `<footer>` and some pre-defined specials like `<logo>`, `<nav>` and the responsive box definitions
* in **typo.css** you'll find all basic font definitions for `<h1>` - `<h3>`, `<p>`, `<a>`, `<ul>`, `<ol>` and some helper classes for list element styling and text colors
* **tables.css** contains basic table styling for default `<table>` tags and some special classes for extended table design
* **forms.css** pre-defines default values for basic form elements and gives some additional classes to style `<label>` tags
* **buttons.css** is an additional css file for button styling
* in **icons.css** are all icons defined (icons are made of FontAwesome webfont)
* the **helpers.css** file contains everything else, like tooltip classes, notification badges, `<blockquote>`, `<pre>`, `<code>` and some generic specials
* **uniform.default.css** is only filled with the uniform related classes, that are used to style `<form>` elements

Let's digg a little bit deeper:

Building projects with a responsive design is as easy as installing **es:CSS** itself. After referencing all needed CSS files in your HTML file just create some `<div>` containers and give them one of the self-explaining class names:

	.one-full 		(100% width)
	.one-half 		(48% width plus 4% margin-right)
	.one-third 		(30% width plus 5% margin-right)
	.two-third 		(65% width plus 5% margin-right)
	.one-quarter 	(22% width plus 4% margin-right)

There's only one thing you have to pay attention at: add the `.last` class to the "last" container in row, if you use more than one container in a row, to reset the right margins and floating definitions.

To see a detailed example have a look at the "scaffolding" section in the example [index.html](/es-css/index.html#scaffold).

----

# To Do:

* ~~*bring concept of basic folder structure to an end*~~
* ~~*figure out the essentially needed files*~~
* ~~*create a simple design with extrem usability*~~
* ~~*add tooltip feature*~~
* ~~*research notification feature*~~
* ~~*refactor button-background / -color combinations (make them more unique)*~~ 
* ~~*add install notes*~~
* ~~*calculate kb of **es:CSS** when integrating as HiFi / LoFi version in projects*~~
* **[BUG]**: IE displays tooltips wrong (borders and margins are misplaced 1px)
* **WIP: keep basic files as generic as possible**
