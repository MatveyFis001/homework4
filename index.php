<?php
$Folder = 'S:\КН-23\Fisun Matvey/file/';
$newFolder = 'S:\КН-23\Fisun Matvey/file_new/';
function copyFiles($Folder, $newFolder)
{
    $files = scandir($Folder);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {         
            $startfile = $Folder . $file;
            $finishfile = $newFolder . $file;
            copy($startfile, $finishfile);
            $newName = $newFolder . 'new_' . $file;
            rename($finishfile, $newName);
        }
    }
}

copyFiles($Folder, $newFolder);
return 0;

