<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>MY BLOG</b></h1>
  <p>Welcome to the blog of <span class="w3-tag">unknown</span></p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">



  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <div class="w3-container">
      <h3><b><?php echo $newsItem['title']?></b></h3>
      <h5><?php echo $newsItem['id']?>, <span class="w3-opacity"><?php echo $newsItem['date']?></span></h5>
    </div>

    <div class="w3-container">
      <p><?php echo $newsItem['short_content']?></p>
      <div class="w3-row">
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b><a href="/news/">Return news list</a></b></span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>


<!-- END BLOG ENTRIES -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>