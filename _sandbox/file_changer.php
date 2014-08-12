<?php 


echo fileowner('file_permissions.php');
echo '<br>';

// if we have posix installed
$owner_id = fileowner('file_permissions.php');
$owner_array = posix_getpwuid($owner_id);
echo $owner_array['name'];

echo "<br>";

chown('file_permissions.php', 'justin');
// chown only works if PHP is a super user
// making a webserver as superuser is a big security issue

// if we have posix installed
$owner_id = fileowner('file_permissions.php');
$owner_array = posix_getpwuid($owner_id);
echo $owner_array['name'];

echo "<br>";

echo substr(decoct(fileperms('file_permissions.php')), 2);
// must always be four octal digits
chmod('file_permissions.php', 0777);
echo substr(decoct(fileperms('file_permissions.php')), 2);

echo "<br>";

echo is_readable('file_permissions.php') ? 'yes' : 'no';
echo "<br>";
echo is_writable('file_permissions.php') ? 'yes' : 'no';
 ?>