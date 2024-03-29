<?php

error_reporting(E_ALL);
ini_set('dispaly_errors', 1);


session_start();


require_once '../action-requires.php';

if($_SERVER['REQUEST_METHOD']=='POST'){ 

    $image_destination = "../../images/uploaded_images/blog_images";

    $image = $_FILES['image'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $readingtime = $_POST['reading_time'];
    $tags = $_POST['tags'];
    $quote = $_POST['quote'];
    $quoter = $_POST['quoter'];

    $username = $_SESSION['username'];
//echo 'k'; exit;

    try {

        if (empty($title) || empty($content) || $image == null || empty($readingtime) || empty ($quote) || empty ($quoter)) {
            throw new Exception ("One or more important values is/are empty. Please check and try again");
        }
        
        //upload the image
        $uploader = new Uploader($image_destination, $image, $title);
        $image_url = $uploader -> moveUploadedImage();


        if ($image_url == false || $image_url == null) {
            echo "Image URL is missing. Cant create blog post";
            exit();
        }

        $blog = new blog();
        $success = $blog->createNewBlogPost($username, $title, $content, $image_url,$tags,$readingtime, $quote, $quoter);
        
        if ($success){
            $_SESSION['success'] = "Post has been added successfully";
            header("Location: ../../publish-post.php");
        }

        
    } catch (Exception $error) {
        echo $error->getMessage();
    }

}