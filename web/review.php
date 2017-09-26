
<?php

classe review
{

  private $comment, $nota;
  //$user = new user();
  $date = new \DateTime();

  public function review(string $comment, float $nota, $date) //rajouter user $usr//
  {
    $this->comment = $comment;
    $this->nota = $nota;
    $this->date = $date;
  }

  public function getComment(): string : float : date
  {
      return $this->comment;
      return $this->nota;
      return $this->date;
  }
}

 ?>
