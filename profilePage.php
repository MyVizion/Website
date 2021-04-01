<?php
    include_once "header.php";
?>

<link rel="stylesheet" href="profilePage.css">
<script src="https://kit.fontawesome.com/a8f313f46f.js" crossorigin="anonymous"></script>


<main>
    <section> <!-- this the profile section -->
        <div class = "trim">
            <img src="../testImg.jpg" alt="porfile Picture" class = "profilePic">
        </div>

        <h1 class = "name">Test Name</h1>

        <button> Edit </button>

        <table> <!-- table with User info for other users to see -->
            <tr>
                <td>age</td>
                <td>17</td>
            </tr>
            <tr>
                <td>Location</td>
                <td>Opende, Groningen</td>
            </tr>
            <tr>
                <td>University</td>
                <td>Creative Business</td>
            </tr>
            <tr>
                <td>Study program</td>
                <td>NHL-Stenden</td>
            </tr>
        </table>

        <ul class = "socialsList"> <!-- List of socials -->
            <li class = "socials insta"><i class="fab fa-instagram"></i></li> <!-- moet nog met icons --> 
            <li class = "socials faceb"><i class="fab fa-facebook-f"></i></li>
            <li class = "socials twitter"><i class="fab fa-twitter"></i></li>
            <li class = "socials snapc"><i class="fab fa-snapchat-ghost"></i></i></li>
            <li class = "socials google"><i class="fab fa-google-plus-g"></i></li>
        </ul>
    </section>
</main>