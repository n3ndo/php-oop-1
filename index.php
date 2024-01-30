<?php
    class Movie {
        public $title;
        public $age_rating;
        public $genre;

        function __construct($_title, $_age_rating, $_genre){
            $this->title = $_title;
            $this->age_rating = $_age_rating;
            $this->genre = $_genre;
        }

        public function isRatedPG(){
            if($this->age_rating == "PG"){
              return true;
            }else{
              return false;
            }
          }

    }

    $movie1 = new Movie("Harry Potter", "PG", "Fantasy");
    $movie2 = new Movie("Lord of the Rings", "PG-13", "Fantasy");

    if($movie1->isRatedPG()){
        echo "<div>".$movie1->title." è un film classificato PG."."<br>".$movie1->genre."</div>";
      }else{
        echo "<div>".$movie1->title."non è un film classificato PG."."<br>".$movie1->genre."</div>";
      }

    if($movie2->isRatedPG()){
        echo "<div>".$movie2->title." è un film classificato PG."."<br>".$movie2->genre."</div>";
      }else{
        echo "<div>".$movie2->title." non è un film classificato PG."."<br>".$movie2->genre."</div>";
      }
?>