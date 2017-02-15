<?php
function getTitle($page)
{
    if (!$page || !$page['title']) {
        return 'Страница сайта';
    }
    $title = $page['title'];
    if ($page['name']) {
        $title .= ' - ' . $page['name'];
    }
    return $title;
}