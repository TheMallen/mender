###Mender

Mender is a class that does a simple but very useful thing: it combines your CSS / Javascripts into one file (one for CSS and one for Javascript),
then minimizes these files on the fly. It makes your site load faster due to reduced number of HTTP requests. It also reduces server load and traffic.
Mender is written in pure PHP and can be used even on very restricted shared hostings. It does not require any other technology, such as Java or Python.

I forked Bender to make it compatible with Composer, as well as make general improvements to the idea.

Original Project description, instructions and updates: http://www.esiteq.com/projects/mender/

*Mender requires php 5.3 for namespaces and other goodness. If you a version working for older versions, check out the original Bender.*

### Changelog
Monday July 28th, 2014
- Refactored code to make use of a `fileClient`, including a basic one which wraps the global functions.
	- This allows you to make use of [Mile](https://github.com/TheMallen/Mile) or any other library you want, as long as an interface with `put()` and `get()` methods is presented.

Friday, July 25th, 2014
- Pretty big refactor to make it a proper composer package.
- Removed ugly code in some spots.
- Restructured dependencies.
- Added support for passing a config array to the constructor.

Friday, November 1, 2013
- Changed a way to check if recombination / minification is required. Now it recombines / minimizes css and javascript files only if one of original
  files were changes, instead of forced compilation of all scripts based on time-to-live

### Usage
	require_once "../vendor/autoload.php";
	$mender = new Mender(array(
	        'path' => '',
	    ));
	$mender->enqueue( "assets/css/bootstrap.css" );
	$mender->enqueue( "assets/css/bootstrap-theme.css" );
	$mender->enqueue( "assets/js/jquery-1.10.2.js" );
	$mender->enqueue( "assets/js/bootstrap.js" );
	echo $mender->output( "cache/stylesheet.css" );

To take a look at a working example, just navigate to the test folder and run `php -S localhost:8000`, open a web browser, and navigate to `localhost:8000`.
You should be able to view the compressed source and whatnot in your browser debug tools.
