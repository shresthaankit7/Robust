<?php 

namespace LibraryInterface;

interface AddDeleteInterface

{
	public function add();
	public function delete($id);
}

interface AddDeleteEditInterface extends AddDeleteInterface

{
	public function edit($id);
}


interface OutputInterface 

{
	public function output();
}