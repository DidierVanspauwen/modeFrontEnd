<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="form" action="#" method="post">

    <!--username inputfield-->
    <div id="usernameInputField">
    <br><br><br>
    <label for="username">Gebruikersnaam:</label><br>
    <input type="text" id="username" name="username" required>
    </div>

    <!--first name inputfield-->
    <div id="firstNameInputField">
    <label for="firstName">Voornaam:</label><br>
    <input type="text" id="firstName" name="firstName">
    </div>

    <!--length inputfield-->
    <div id="lengthInputField">
    <label for="length">Lengte in cm:</label><br>
    <input type="text" id="length" name="length">
    </div>

    <!--age inputfield-->
    <div id="ageInputField">
    <label for="age">Leeftijd:</label><br>
    <input type="text" id="age" name="age">
    </div>

    <!--shoe size inputfield-->
    <div id="shoeSizeInputField">
    <label for="shoeSize">Schoenmaat:</label><br>
    <input type="text" id="shoeSize" name="shoeSize">
    </div>

    <!--fashion description inputfield-->
    <div id="fashionDescriptionInputField">
    <label for="fashionDes">Fashion omschrijving:</label><br>
    <input type="text" id="fashionDes" name="fashionDes">
    </div>


    <input type="submit" value="Submit">
    </form>

    <!-- javascript ajax library  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        let form = document.getElementsByTagName('form')[0];
        form.addEventListener('submit', (e) => {

            e.preventDefault();

            $.post('../modeBackEnd/test.php', $('form').serialize())

        });
    </script>
</body>
</html>