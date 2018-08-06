<?php 
    
    // difference between require and include is
    // that require throws an error if file doesn't exist
    require 'functions.php';

    $animals = ['dog','cat'];

    dd($animals);

    echo "THIS WILL NOT GET PRINTED!";

    include 'index.view.php';
