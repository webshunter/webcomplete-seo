<?php 

function ai($value = 11)
{
	return 'INT('.$value.') AUTO_INCREMENT PRIMARY KEY';
}

function char($value = 255)
{
	return 'VARCHAR('.$value.')';
}

function no($value = 11)
{
	return 'INT('.$value.')';
}

function text()
{
	return 'TEXT';
}

function textlong()
{
	return 'LONGTEXT';
}
function timestamp()
{
	return ' TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ';
}
function timestampupdate()
{
	return ' TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP';
}

function relation($table, $tablerow, $relation, $key = "id")
{
	return 'ALTER TABLE `'.$table.'` ADD FOREIGN KEY (`'.$tablerow.'`) REFERENCES `'.$relation.'`(`'.$key.'`) ON DELETE RESTRICT ON UPDATE RESTRICT;';
}


function command( $link_name ,$table){
	return "php gugus template $link_name --crud $table";
}

