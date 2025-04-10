<?php
class PageController {
    private $twig;

    public function __construct($twig) {
        $this->twig = $twig;
    }

    public function home() {
        return $this->twig->render('home.html.twig');
    }

    public function about() {
        return $this->twig->render('about.html.twig');
    }

    public function contacts() {
        return $this->twig->render('contacts.html.twig');
    }
}