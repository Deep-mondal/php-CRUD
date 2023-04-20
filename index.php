<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
</head>
<body>
    <header class="seca">
        <div class="head">
        <h1>Welcome </h1>
        </div>
    </header>
    <form class="form" action="save.php"method="post" >
        <h3>Registration Form</h3>
        <p>(Enter details and get the pdf by clicking 'Download(PDF)'button)</p>
        <section class="Form1">
        <div>
        <label for="Name" >Enter your name:</label><br>
        <input type="text" name="Name" placeholder="e.g.Anil Sharma" ><br>
        </div>
        <div>
        <label for="Phone" >Enter your phone no.:</label><br>
        <input type="text" name="Phone" placeholder="+91-" ><br>
        </div>
        <div>
        <label for="City" >Enter your city:</label><br>
        <input type="text"  name="City" placeholder="e.g.Delhi"><br>
        </div>
        </section><hr>
        <section class="buttn">
        <input class="submit" type="submit" value="Download(PDF)" onclick="alert('Registered\nInformation saved for future use')"  />
    </section>
    </form>
    <footer class="secc">
        <hr>
        <section class="a">
        <h1>Contact Us</h1>
        <p class="cont">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur tempore exercitationem dolore dolorem debitis illo reprehenderit ducimus nesciunt accusamus, 
                amet incidunt impedit excepturi quo dignissimos vel, quibusdam dolor eos ipsam!</p>
        </section>
        <section class="b">
            <h1>About Us</h1>
            <p class="cont">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur tempore exercitationem dolore dolorem debitis illo reprehenderit ducimus nesciunt accusamus, 
                amet incidunt impedit excepturi quo dignissimos vel, quibusdam dolor eos ipsam!</p>
        </section>
    </footer>
    <script src="index.js"></script>
</body>
</html>
