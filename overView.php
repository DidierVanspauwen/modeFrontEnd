<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="overView.css">
</head>
<body>
    
    <input type="text" placeholder="zoek username" id="usernameField">
    <!--<button onclick="loadProfile()">Zoek username</button> -->
    <button onclick="loadProfile()">Zoek username</button>

    <!--Home button-->
    <div id="homeButton"><a href=index.php >&#127968 </a></div>

    <!--'Plus' button-->
    <div id="plusButton"><a href=newPost.php >&#10133 </a></div>

    <!-- Setting button -->
    <div id="settingButton"><a href=newProfile.php >&#128295 </a></div>


    <div id="profilePicture"></div>
        
    <!--username field-->
    <div id="usernameInputField">
    <br><br><br>
    <label for="username">Gebruikersnaam:</label><br>
    <input type="text" id="username" name="username" value="" readonly>
    </div>
        
    <div id="greyCircle"></div>

    <!--fashion description field-->
    <div id="fashionDescriptionInputField">
        <div id="fashionDescriptionText"></div>
    <label for="fashionDes">Fashion omschrijving:</label><br>
    <input type="text" id="fashionDes" name="fashionDes" value="" readonly>
    </div>

    <script>
        
        function loadProfile() {
            
            let username = document.getElementById('usernameField').value;

            fetch('http://localhost/CH8/modeBackEnd/users.php?username=' + username)
            .then((response) => response.json())
            .then((result) => {

                console.log(result[0].username);

                document.getElementById('username').value = result[0].username;
                document.getElementById('fashionDes').value = result[0].fashionDescription;
            
            })
            .catch(e => {
                alert('niet gevonden');
            })
        }

    </script>
</body>
</html>