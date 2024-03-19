<?php
    $loremipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquet nisi et nunc accumsan, eget tincidunt velit fermentum. Nulla facilisi. Maecenas nec consectetur velit, sit amet tincidunt sem. Integer euismod fringilla nisl, eget fringilla nulla tincidunt eu. Integer vel justo felis. Duis faucibus est non gravida vehicula. Aliquam a ex lorem. In hac habitasse platea dictumst. Proin eu ex id turpis fermentum fermentum a vel justo. Donec at est sapien. Sed ultricies posuere enim, quis congue nulla malesuada vel. Mauris sodales orci a mi blandit fringilla. Curabitur fringilla elit at ipsum varius, non euismod sapien luctus. Donec sed orci at mauris rhoncus vestibulum vel ut nulla. ";

    echo "<p>{$loremipsum}</p>";
    echo "Panjang Karakter : " .strlen($loremipsum) . "<br>";
    echo "Panjang kata : " . str_word_count($loremipsum) . "<br>";
    echo "<p>" . strtoupper($loremipsum) . "<br>";
    echo "<p>" . strtolower($loremipsum) . "<br>";
?>