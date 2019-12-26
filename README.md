# Localhost Conditional Tag
Localhost Conditional Tag is a very simple and lightweight plugin that allows you to utilize the localhost conditional tag in the PHP programming of your WordPress theme.

## Why do I need this plugin?
If you are a WordPress developer, sometimes you have snippets of code that you want to run only on your localhost development server. The other way around, sometimes you want to have snippets of code that you don't want to run on your localhost development server. Hence, this is where this plugin comes in handy. 

## A new Conditional Tag
WordPress has an extensive list of [conditional tags](https://codex.wordpress.org/Conditional_Tags) that you can use in your template files. This plugin adds a new conditional tag:
```
is_localhost()
```

## How to use it in your WordPress template
There are no settings or parameters. This plugin does not add anything to the WordPress backend. Once activated, you can utilize this plugin in your WordPress theme files in your PHP programming. Here are a few examples:
```
<?php if ( is_localhost() ) { 
     echo "This is visible only on localhost. You will not see this message on the live site.";
} ?>
```
Likewise, you can also use the NOT statement:
```
<?php if ( ! is_localhost() ) { 
     echo "This is NOT visible on localhost. You will see this message on the live site.";
} ?>
```
You can also use the ELSE statement:
```
<?php if ( is_localhost() ) { 
     echo "This is visible only on localhost.";
} else {
     echo "This is visible only on the live site.";
} ?>
```
You can combine with existing conditional tags:
```
<?php if ( is_localhost() && is_single() ) { 
     echo "This message is visible on localhost and will appear only on single post pages.";
} ?>
```

## Practical uses of this plugin
- to prevent analytics, hit counters and other page trackers to run on localhost which may potentially slow down page loading times and unintentionally affect your stats
- to display messages and/or execute snippets of code only on localhost
- to display messages and/or execute snippets of code only on the live website

## Screenshots
There are no screenshots because this plugin does not add anything to the WordPress backend. 

## Changelog
Version 1.0.0 - First plugin release.


