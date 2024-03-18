<?php
    $loremIpsum = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    At, et sint modi facere officiis dolore id sequi aliquam eaque labore eos libero doloremque saepe sed ipsa voluptas totam pariatur
    excepturi atque doloribus cumque minus suscipit! Eligendi unde pariatur quod soluta perspiciatis iure nam at possimus!";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang Karakter : " . strlen($loremIpsum). "<br>";
    echo "Panjang Kata : " . str_word_count($loremIpsum). "<br>";
    echo "<p>" . strtoupper($loremIpsum). "</p>";
    echo "<p>" . strtolower($loremIpsum). "</p>";
?>