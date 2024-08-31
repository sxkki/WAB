<?php
declare(strict_types=1);

function render_template(string $template, array $data = [])
{
  extract($data);
  require "template/$template.php";
}

function get_data(string $url): array
{
  $result = file_get_contents($url);
  $data = json_decode($result, true);
  return $data;
}

