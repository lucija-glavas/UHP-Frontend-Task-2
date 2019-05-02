<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php print $meta_description; ?>">
<meta name="keywords" content="<?php print $meta_keywords; ?>">

<?php
  if ($page_title == 'Home') {
    echo "<title>" . $site_title . " | " . $tagline .  "</title>";
  }
  else {
    echo "<title>" . $page_title . " | " . $site_title . "</title>";
  }
?>

<link rel="shortcut icon" href="<?php print $base_url; ?>img/logo/icon.png">

<link href="<?php print $base_url; ?>css/main.css" rel="stylesheet">
