<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <nav></nav>
    <main>

        <form action="form.php" method="post">

            <fieldset>
                <legend>Nous contacter</legend>
                    
                <label for="nom">Votre nom</label>
                <input type="text" id="nom" name="nom" value="John">
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="Email">
                <br>
                <label for="sujet">Sujet:</label>
                <input type="text" id="sujet" name="sujet" value="Sujet du Contact">
                <br>
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="10" cols="30">
Votre message
                </textarea>
                <br>
                <input type="submit" value="Envoyer">
            </fieldset>
        </form>

    </main>
    <footer></footer>
</body>
</html>

