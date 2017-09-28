
<?php

classe review
{

  private $id, $comment, $nota;
  //$user = new user();
  $date = new \DateTime();

  public function review(string comment, float $nota) //rajouter user $usr//
  {
    $this->comment = $comment;
    $this->nota = $nota;

  }
  public function getInfo(): string : float
  {
      return $this->comment;
      return $this->nota

  }
}

$rev = new review("super review!", 2); //création d'une review
print $rev->getInfo();
