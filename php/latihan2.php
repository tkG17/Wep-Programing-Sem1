<?php
$data = "Politeknik Caltex Riau";
echo strtoupper($data)."<br>"; // KAPITAL semua
echo strtolower($data)."<br>"; // kecil semua 
echo ucfirst($data)."<br>";    // kapital huruf awal 
echo ucwords($data)."<br>";	   // kapital huruf awal
echo "tulisan asli " . $data;  // kata asli 
echo strlen(" hello world!");
echo str_word_count(" hello world!");
echo strrev(" hello world!");
?>
