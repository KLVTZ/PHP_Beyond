<?php 


// we already used:
// dirname()
// is_dir()

// get cwd(): current working directory
echo getcwd() . "<br>";

//mkdir()
mkdir('new', 0777); // 0777 PHP defaukt

// you can use umask() to change default permission settings
// default may be 0022

// recursive dir creation
mkdir('new/test/test2', 0777, true);

// changin dirs
chdir('new');
echo getcwd() . "<br>";

// removing a directory
rmdir('test/test2');
 ?>