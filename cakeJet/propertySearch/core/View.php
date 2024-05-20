// core/View.php
<?php

class View {
    public function render($view, $data = []) {
        require_once '../app/views/properties/' . $view . 'php';
    }
}
