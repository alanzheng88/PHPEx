<?php require('partials/header.php'); ?>

    <h1>Submit Your Name</h1>

    <form method="POST" action="/names">
        <!-- http://localhost:8888/names?myname=alan -->
        <input type="text" name="firstname" placeholder="enter name">
        <button type="submit">Submit</button>
    </form>
    
<?php require('partials/footer.php'); ?>