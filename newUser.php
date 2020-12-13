
<!DOCTYPE html>
<html lang="en" dir="index.php">

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles/dashBoard.css">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <script src="scripts/newUserScript.js" type="text/javascript"></script>
</head>

<header>
    <img src="images/bug.png" alt="Main Bug Issue Icon" />
    <h2>BugMe Issue Tracker</h2>
</header>

<div id="option-form">
    <section id="options">
        <div onClick="homePage()">
            <img src="images/home icon.png" alt="Home Icon" />
            <h3>Home</h3>
        </div>
        <div>
            <img src="images/Add user.png" alt="Addition of a User - Icon" />
            <h3>Add User</h3>
        </div>
        <div>
            <img src="images/issue.svg" alt="New Issue - Icon" />
            <h3>New Issue</h3>
        </div>
		<a href="scripts/logout.php" style="color: black; text-decoration: none;">
        <div>
            <img src="images/logout.svg" alt="Primary Logout - Icon" />
            <h3>Logout</h3>
        </div></a>

    </section>
    <section id="results">
    <form class ="myform" >
            <div class="inputnbutton">
                <div class="allinput">
                    <div class="inputnlabel">
                        <label for="fname">First Name:</label><br />
                        <input type="text" name="fname" id="fname" /><br />
                    </div>
                    <div class="inputnlabel">
                        <label for="lname">Last Name:</label><br />
                        <input type="text" name="lname" id="lname" /><br />
                    </div>
                    <div class="inputnlabel">
                        <label for="pword">Password:</label><br />
                        <input type="text" name="pword" id="pword" /><br />
                    </div>
                    <div class="inputnlabel">
                        <label for="mail">Email:</label><br />
                        <input type="text" name="mail" id="mail" /><br />
                    </div>
                    <input type="hidden" name="key" value="e11869d1186d0791" id="hidden" />
                </div>
                <button type="submit" id="submit">Submit</button>
            </div>
    </form>
    </section>
  
</div>