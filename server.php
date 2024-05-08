<?php

// grab the string data from the json file
$data_string = file_get_contents('dischi.json');

// convert the string in php array (true means that the string will be converted in arrow array)
$albums = json_decode($data_string, true);




// $albums = [
//   [
//       "title" => "New Jersey",
//       "author" => "Bon Jovi",
//       "year" => 1988,
//       "poster" => "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
//       "genre" => "Rock",
//   ],
//   [
//       "title" => "Live at Wembley 86",
//       "author" => "Queen",
//       "year" => 1992,
//       "poster" => "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
//       "genre" => "Pop",
//   ],
//   [
//       "title" => "Ten\"s Summoner\"s Tales",
//       "author" => "Sting",
//       "year" => 1993,
//       "poster" => "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
//       "genre" => "Pop",
//   ],
//   [
//       "title" => "Steve Gadd band",
//       "author" => "Steve Gadd Band",
//       "year" => 2018,
//       "poster" => "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
//       "genre" => "Jazz",
//   ],
//   [
//       "title" => "Brave new World",
//       "author" => "Iron Maiden",
//       "year" => 2000,
//       "poster" => "https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg",
//       "genre" => "Metal",
//   ],
//   [
//       "title" => "One more car, one more rider",
//       "author" => "Eric Clapton",
//       "year" => 2002,
//       "poster" => "https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg",
//       "genre" => "Rock",
//   ]
// ];

// set header in the right type
header('Content-type: application/json');

// set the "shape" of the response
$response = [
  "results" => $albums,
  "success" => true,
];

// create output converted in json string
echo json_encode($response);