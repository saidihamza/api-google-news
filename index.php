<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implement Google API</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <?php
$url='https://newsapi.org/v2/everything?q=tesla&from=2023-07-12&sortBy=publishedAt&apiKey=95cb3029b69d4d07b5c9a25036af908c';
$response=file_get_contents($url);
$NewsData= json_decode($response);
?>
<div class="jumbotron">
<h1>Google NEWS API | PHP</h1>
</div>
<div class="container-fluid">
<?php
foreach($NewsData->articles as $News)
{
    ?>
   <div class="row NewsGrid">
    <div class="col-md-3">
        <img src="<?php echo $News->urlToImage ?>" alt="News thumbnail" srcset="">
    </div>
    <div class="col-md 9 NewsGrid">
        <h2>Title : <?php echo $News->title ?></h2>
        <h5>Description :<?php echo $News->description ?></h5>
        <p>Content:<?php echo $News->content ?></p>
        <h6>Auther :<?php echo $News->author ?></h6>
        <h6>Published:<?php echo $News->publishedAt ?></h6>
    </div>
   
   </div> 
<?php
}
?>

</div>
</body>
</html>