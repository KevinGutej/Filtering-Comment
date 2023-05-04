<html>

<body>
  <form action="index.php" method="GET">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="comment" placeholder="comment">
    <input type="submit" value="Post comment">
  </form>



</body>
<?php

if (!empty($_GET["name"]) && isset($_GET["name"])) {
  echo "Succesful" . "<br>";
  if (!empty($_GET["comment"]) && isset($_GET["comment"])) {
    echo "Your name is: " . $_GET["name"] . "<br>";
    echo "Your comment before filter is: " . $_GET["comment"] . "<br>";
    echo "You comment without html tags: " . strip_tags($_GET["comment"])  . "<br>";
    $userComment = $_GET["comment"];
    $filteredComment = htmlspecialchars($userComment);
    echo "Your comment after filter is: " . $filteredComment;
  }
}
?>

</html>