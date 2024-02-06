<?php
declare(strict_types= 1);

require __DIR__ ."/Michelf/MarkdownExtra.inc.php";
require_once('database.php');

use Michelf\Markdown;

class Poeme {
    private int $id;
    private string $titre;
    private string $auteur;
    private string $contenu;
    private string $timestamp;

    public function __construct(int $id, string $titre, string $auteur, string $contenu, string $timestamp) {
        $this->id = $id;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->contenu = $contenu;
        $this->timestamp = $timestamp;
    }

    public function __toString(): string {
        $titre = "<h2>" . $this->titre . "</h2>";
        $contenu = Markdown::defaultTransform($this->contenu);

        return $titre ."<p>". $contenu ."<p> <i>". $this->auteur ."</i>" . " le ". $this->timestamp;
    }
}