###Mender

Mender is a class that does a simple but very useful thing: it combines your CSS / Javascripts into one file (one for CSS and one for Javascript),
then minimizes these files on the fly. It makes your site load faster due to reduced number of HTTP requests. It also reduces server load and traffic.
Mender is written in pure PHP and can be used even on very restricted shared hostings. It does not require any other technology, such as Java or Python.

I forked Bender to make it compatible with Composer! I named the fork Mender, since I am Mallen. :D

Original Project description, instructions and updates: http://www.esiteq.com/projects/mender/


###Changelog

Friday, July 25th, 2014
- Pretty big refactor to make it a proper composer package.
- Removed ugly code in some spots.
- Restructured dependencies.
- Added support for passing a config array to the constructor.


Friday, November 1, 2013
- Changed a way to check if recombination / minification is required. Now it recombines / minimizes css and javascript files only if one of original
  files were changes, instead of forced compilation of all scripts based on time-to-live
