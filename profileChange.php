<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profileChange.css">
</head>
<body>
    
    <!-- Home button -->
    <div id="homeButton"><a href=index.php >&#127968 </a></div>

    <!--greyCircle-->
    <div id="greyCircle">
        <br><br><br><br><br><br><br><br><br<br><br><br><br><br><br><br>
        Foto toevoegen
    </div>
    
    <input type="text" placeholder="zoek username" id="usernameField">
    <!--<button onclick="loadProfile()">Zoek username</button> -->
    <button onclick="loadProfile()">Zoek username</button>





    <form> 

    <div id="profile_id"></div>

    <!--username inputfield-->
    <div id="usernameInputField">
    <br><br><br>
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
        <div id="fashionDescriptionText"></div>
    <label for="fashionDes">Fashion omschrijving:</label><br>
    <input type="text" id="fashionDes" name="fashionDes">
    </div>

    
    <!--'save' button-->
    <div id="saveButton">
    <button type="submit" onclick="alert('Je wijzigingen zijn opgeslagen.')">Opslaan</button>
    </div>
    </form>

    <script>
        
        function loadProfile() {
            
            let username = document.getElementById('usernameField').value;

            fetch('../modeBackEnd/users.php?username=' + username)
            .then((response) => response.json())
            .then((result) => {

                console.log(result[0].username);

                document.getElementById('username').value = result[0].username;
                document.getElementById('firstName').value = result[0].name;
                document.getElementById('age').value = result[0].age;
                document.getElementById('shoeSize').value = result[0].shoeSize;
                document.getElementById('length').value = result[0].height;
                document.getElementById('fashionDes').value = result[0].fashionDescription;
                document.getElementById('fashionDescriptionText').innerText = result[0].fashionDescription;
                document.getElementById('profile_id').innerHTML = result[0].id;
            
            })
            .catch(e => {
                alert('niet gevonden');
            })
        }

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        let form = document.getElementsByTagName('form')[0];
        form.addEventListener('submit', (e) => {

            e.preventDefault();

            $.post('../modeBackEnd/profileChange.php?id=' + document.getElementById('profile_id').innerHTML, $('form').serialize())

        });
    </script>
</body>
</html>