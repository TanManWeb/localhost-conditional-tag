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
There are no settings or parameters. This plugin does not add anything to the WordPress backend. Once activated, you can utilize this plugin in your WordPress theme files by simply adding to your PHP programming. Here is an example:
```
<?php if ( is_localhost() ) { 
     echo "This is only visible on localhost. You will not see this message on the live site.";
} ?>
```
Likewise, you can also use the NOT statement:
```
<?php if ( ! is_localhost() ) { 
     echo "This is NOT visible on localhost. You will see this message on the live site.";
} ?>
```
You can combine with existing conditional tags:
```
<?php if ( is_localhost() && is_single ) { 
     echo "This message is visible on localhost and will appear only on single posts.";
} ?>
```

