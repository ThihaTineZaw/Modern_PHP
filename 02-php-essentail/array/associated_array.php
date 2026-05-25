<!-- key value pair  -->
<?php



$authors = ["George Orwell", "J.K. Rowling", "J.R.R. Tolkien", "Dan Brown"];

$books = ["1984", "Harry Potter", "The Hobbit", "The Da Vinci Code"];

echo "<pre>";
echo "Authors Array : \n";
var_dump($authors);
echo "Books Array : \n";
var_dump($books);

$combine_array = array_combine($authors, $books);
echo "Combine Array : \n";
var_dump($combine_array);


foreach ($combine_array as $key => $book) echo "{$key} wrote the {$book} <br>";


$arr_key = array_keys($combine_array);
echo "Array Keys : \n";
var_dump($arr_key);

$arr_val = array_values($combine_array);
echo "Array Values : \n";
var_dump($arr_val);




echo "</pre>";
