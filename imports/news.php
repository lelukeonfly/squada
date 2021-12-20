<?php
$posts = 5;
$feed = simplexml_load_file('https://rss.fantacalcio.it/');

$i = 1;
foreach ($feed->channel->item as $item) {
  $title       = (string) $item->title;
  $description = (string) $item->description;

  print '<div>';

  printf(
    '<h2>%s</h2><p>%s</p>', 
    $title, 
    $description
  );

  if ($media = $item->children('media', TRUE)) {
    if ($media->content->thumbnail) {
      $attributes = $media->content->thumbnail->attributes();
      $imgsrc     = (string)$attributes['url'];

      printf('<div><img src="%s" alt="" /></div>', $imgsrc);
    }
  }

  echo '</div>';
  if ($i++ == $posts) break;
}

?>