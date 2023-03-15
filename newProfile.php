<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="newProfile.css">
</head>
<body>
    
    <!--Home button-->
    <div id="home"><a href=.php >&#127968 </a></div>

    <!--greyCircle-->
    <div id="greyCircle">
        <br><br><br><br><br><br><br><br><br<br><br><br><br><br><br><br>
        Foto toevoegen
    </div>
    
    <!--username inputfield-->
    <div id="usernameInputField">
    <label for="username">Gebruikersnaam:</label><br>
    <input type="text" id="username" name="username">
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

    <!--'save' button-->
    <div id="saveButton">
    <button type="button" onclick="alert('Je profiel is aangemaakt. Welkom!')">Opslaan</button>
    </div>

</body>
</html>