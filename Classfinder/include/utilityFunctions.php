<?php

function my_minify($html)
{
    $html = preg_replace("/\t\t\t/", "\t", $html);
    $html = preg_replace("/\t\t\t/", "\t", $html);
    $html = preg_replace("/\t\t\t/", "\t", $html);
    $html = preg_replace("/\t\t\t/", "\t", $html);
    $html = preg_replace("/\t\t\t/", "\t", $html);
    $html = preg_replace("/\t\t/", "\t", $html);
    $html = preg_replace("/\t/", " ", $html);
    $html = preg_replace("/   /", " ", $html);
    $html = preg_replace("/   /", " ", $html);
    $html = preg_replace("/   /", " ", $html);
    $html = preg_replace("/   /", " ", $html);
    $html = preg_replace("/  /", " ", $html);
    $html = preg_replace("/\r\n/", "\n", $html);
    $html = preg_replace("/\r/", "\n", $html);
    $html = preg_replace("/\n /", "\n", $html);
    return $html;
}
