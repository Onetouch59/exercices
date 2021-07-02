<?php include('header.php'); ?>

    <fieldset>
    <legend>Votre sujet</legend>
    <form action="handler-topic.php" method="POST">
    <div>
        <label for="input_author">Auteur : </label>
        <input type="text" class="form-control" id="input_author" name="data_author"> 
    </div>
    <div>
        <label for="input_object">Sujet : </label>
        <input type="text" class="form-control" id="input_object" name="data_object"> 
    </div>
    <div>
        <label for="input_text">Votre message </label>
        <textarea name="data_text" class="form-control" id="input_text" cols="30" rows="10"></textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-outline-primary"> envoyer</button>
    </div>

    <?php include('footer.php'); ?>


    
    </form>
    </fieldset>
</body>
</html>