<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LnkedIn|Basma Sofia</title>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">LnkedIn</a></div>
            <div class="menu">
                <ul>
                    <li class="home"><a href="">Home</a></li>
                    <li><a href="">My Network</a></li>
                    <li><a href="">Jobs</a></li>
                    <li><a href="">Messaging</a></li>
                    <li><a href="">Notifications</a></li>
                    <li><a href="">Me</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <img src="pp.png">
        <h2>Basma Sofia</h2>
        <p>Undergraduate Student at Universitas Brawijaya</p>
        <p>University of Brawijaya</p>
    </div>
    <div class="wrapper">
        <section id="education">
            <h2>Education</h2>
            <img class="ub" src="ub.png">
            <b>Universitas Brawijaya</b>
            <p>Bachelors degree, Computer Engineering</p>
        </section>
        <br>
        <section id="volunteer">
            <h2>Volunteer Experience</h2>
            <img class="filkom" src="filkom.png">
            <b>Secretary at CORE 2020</b>
            <p>Faculty of Computer Science (FILKOM) Universitas Brawijaya</p>
            <br>
            <br>
            <br>
            <br>
            <img class="filkom" src="filkom.png">
            <b>Treasurer at PEMILWA FILKOM 2019</b>
            <p>Faculty of Computer Science (FILKOM) Universitas Brawijaya</p>
        </section>
        <section id="accomplishments">
            <br>
            <br>
            <h2>Accomplishments</h2>
            <b>3 Languages</b>
            <p>English</p>
            <p>Indonesian</p>
            <p>Spanish</p>
        </section>
        <section id="interests">
            <h2>Interests</h2>
            <img class="ub" src="ub.png">
            <b>Universitas Brawijaya</b>
			<br>
			<br>
			<br>
			<br>
        </section>
    </div>
	<?php 
		echo '=========================================================================================================================================================================';
        echo "<br>";
        echo "Menghitung luas dan keliling lingkaran";
        echo "<br>";
        $phi=3.14;
        $r=10;
        $pilihan=1;
        if ($pilihan=1){
            $luas=$phi*$r*$r;
			$keliling=2*$phi*$r;
            echo "Keliling Lingkaran = $keliling";
            echo "<br>";
            echo "Luas Lingkaran = $luas";
            echo "<br>";
        }
        else {
            echo "Maaf, tidak bisa dikalkulasi";
        }
	?>
</body>
</html>