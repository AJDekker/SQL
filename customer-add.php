
<!DOCTYPE html>
<html lang="nl">

    <head>
        <meta charset="UTF-8">
        <title>List</title>
        <link type="text/css" rel="stylesheet" href="layout.css">
    </head>


    <body>

        <form method="post" action="customer-insert.php">
            <nav>
                <a href="." title="home">home</a>
                <a href="customer-insert.php" title="back to list">back</a>
                <button title="save" type="submit">save</button>
                <button title="reset" type="reset">reset</button>
            </nav>

            <h1>Klant</h1>

             <label>
                Klant nummer
                <input type="text" readonly name="customerNumber" value="">
            </label>

            <label>
                Naam
                <input type="text" name="customerName" value="">
            </label>

            <label>
                Telefoonnummer
                <input type="text" name="customerPhone" value="">
            </label>

            <label>
                Email-adres
                <input type="text" name="customerEmail" value="">
            </label>

            <label>
                Adres
                <input type="text" name="customerAdres" value="">
            </label>

            <label>
                Stad
                <input type="text" name="customerCity" value="">
            </label>

            <label>
                Postcode
                <input type="text" name="customerZip" value="">
            </label>

            <label>
                Land
                <input type="text" name="customerCountry" value="">
            </label>

        </form>
    </body>

</html>

