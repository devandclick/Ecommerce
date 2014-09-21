@ECHO OFF
SET BIN_TARGET=%~dp0/../vendor/doctrine/orm/bin/doctrine.php
php "%BIN_TARGET%" %*
