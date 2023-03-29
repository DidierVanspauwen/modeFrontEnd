<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Profile.css">
</head>
<body>

    <!--Home button-->
    <div id="homeButton"><a href=index.php >&#127968 </a></div>

    <!--'Plus' button-->
    <div id="plusButton"><a href=newPost.php >&#10133 </a></div>

    <!-- Setting button -->
    <div id="settingButton"><a href=profileChange.php >&#128295 </a></div>

    <!--greyCircle-->
    <div id="greyCircle"></div>

    <button onclick="loadProfile(1)">Laad profiel 1</button><button onclick="loadProfile(2)">Laad profiel 2</button>
    
    <!--username field-->
    <div id="usernameInputField">
    <label for="username">Gebruikersnaam:</label><br>
    <input type="text" id="username" name="username" value="" readonly>
    </div>

    <!--first name field-->
    <div id="firstNameInputField">
    <label for="firstName">Voornaam:</label><br>
    <input type="text" id="firstName" name="firstName" value="" readonly>
    </div>

    <!--length field-->
    <div id="lengthInputField">
    <label for="length">Lengte in cm:</label><br>
    <input type="text" id="length" name="length" value="" readonly>
    </div>

    <!--age field-->
    <div id="ageInputField">
    <label for="age">Leeftijd:</label><br>
    <input type="text" id="age" name="age" value="" readonly>
    </div>

    <!--shoe size field-->
    <div id="shoeSizeInputField">
    <label for="shoeSize">Schoenmaat:</label><br>
    <input type="text" id="shoeSize" name="shoeSize" value="" readonly>
    </div>

    <!--fashion description field-->
    <div id="fashionDescriptionInputField">
    <label for="fashionDes">Fashion omschrijving:</label><br>
    <input type="text" id="fashionDes" name="fashionDes" value="" readonly>
    </div>


    <script>
        
        function loadProfile(id) {
            fetch('../modeBackEnd/users.php?id=' + id)
            .then((response) => response.json())
            .then((result) => {

                console.log(result[0].username);

                document.getElementById('username').value = result[0].username;
                document.getElementById('firstName').value = result[0].name;
                document.getElementById('age').value = result[0].age;
                document.getElementById('shoeSize').value = result[0].shoeSize;
                document.getElementById('length').value = result[0].height;
                document.getElementById('fashionDes').value = result[0].fashionDescription;
                
            });
        }

    </script>
</body>
</html>