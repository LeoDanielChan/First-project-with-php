<?php

spl_autoload_register('my_psr4_autoloader');

/**
 * An example of a project-specific implementation.
 *
 * @param string $class The fully-qualified class name.
 * @return void
 */
function my_psr4_autoloader($class)
{
  // replace namespace separators with directory separators in the relative 
  // class name, append with .php
  $class_path = str_replace('\\', '/', $class);

  $file =  '../' . $class_path . '.php';

  // if the file exists, require it
  if (file_exists($file)) {
    require $file;
  } else {
    die("No se pudo cargar $class");
  }
}
