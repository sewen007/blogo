<?php

class blog {

	protected $databaseInstance = "";

	public function __construct() {
		$this->databaseInstance = new db();
	}

	public function getAllBlogPosts(){
		$query = "select * from blogposts" ;

		return $this->databaseInstance->getRows($query,array());
	}

	public function createNewBlogPost($username,$title,$content,$image_url,$tags, $reading_time, $quote, $quoter){
		$today = date("F j, Y g:i a");

		$query = "insert into blogposts set creator = ?, title = ?, content = ?, image_url = ?, tags = ?, reading_time = ?, quote = ?, quoter = ?";
		$values = array($username, $title, $content, $image_url,$tags,$reading_time,$quote, $quoter);

		$this->databaseInstance->insertRow($query,$values);

		return true;

	}

	public function editBlogPost($blogID,$username,$title, $content,$image_url, $reading_time, $quote, $quoter){
		
		$query = "update blogposts set username = ? title = ?, content = ?, image_url = ? , reading_time = ?, quote = ?, quoter = ? where blog_id = ?";
		$values = array ($title, $content, $image_url,$reading_time,$quote, $blogID);

		$this->databaseInstance->updateRow($query, $values);

		return true;
	}

	public function deleteBlogPost($blogID){

		$query = "delete from blogposts where blog_id = ?";

		$response = $this->databaseInstance->deleteRow($query, array($blogID));

		return true;
	}

}