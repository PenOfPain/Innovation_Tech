
<?php

class Review
{

  private $id, $comment, $nota;
  //$user = new user();

  public function review(string $comment, float $nota) //rajouter user $usr//
  {
    $this->comment = $comment;
    $this->nota = $nota;

  }
  public function getComment(): string
  {
      return $this->comment;

  }
}

$rev = new review("super review!", 2); //création d'une review
print $rev->getComment();


?>
