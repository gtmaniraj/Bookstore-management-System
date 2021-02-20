<?php 
include_once 'config/auth.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>
        Book Store Management System
    </title>
</head>
<body>
    <form class="add-book" method="POST" action="config/book_fn.php" enctype="multipart/form-data">
        <label for="Book_name"> Book Name </label>
            <input type="text" name="Book_name" id="Book_name" placeholder="Book Name"><br>
        <label for="Author_name"> Author Name </label>
            <input type="text" name="Author_name" id="Author_name" placeholder="Author Name"><br>
        <!-- <label for="Publication"> Publication </label>
            <input type="text" name="Publication" id="Publication" placeholder="Publication"><br>
        <label for="Edition"> Edition</label>
            <input type="text" name="Edition" id="Edition" placeholder="Edition"><br> -->
            <label for="ISBN"> ISBN Number</label>
        <input type="text" name="ISBN" id="ISBN" placeholder="ISBN Number of the book to change info"><br>
            <label for="Stock"> Stock</label>
            <input type="text" name="Stock" id="Stock" placeholder="Stock"><br>
            <!-- <label for="uploadfile"> Upload Images/File :</label> 
             <input type="file" name="uploadfile"><br> -->
             <?php insert_token(); ?>
             <input type="Submit" name="Update_Book" value="Update Book"><br>
    </form>
   

    <?php  include "footer.php";?>
</body>
</html>