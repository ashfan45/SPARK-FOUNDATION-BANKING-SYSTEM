<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASHU Bank | Home</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/rock.png" type="image/x-icon"/>
    <!--Favicon icon-->
    <link rel='shortcut icon' type='image/x-icon' href='images/rock.png?v=2' />
</head>
<body>

    <header>
    	<div class="container">
        	<nav>
            	<div class="nav-brand">
                	<a href="index.php">
                    	<img src="images/rock.png" alt="ASHU Bank Logo">
                    </a>
                </div>
                
                <div class="menu-icons open">
                    <ion-icon name="menu"></ion-icon>
                </div>
                
                <ul class="nav-list">
                	<div class="menu-icons close">
                        <ion-icon name="close"></ion-icon>
                	</div>
                    <li class="nav-item">
                    	<a href="index.php" class="nav-link current">Home</a>
                    </li>
                    <li class="nav-item">
                    	<a href="create_user.php" class="nav-link">Create User</a>
                    </li>
                    <li class="nav-item">
                    	<a href="make_transaction.php" class="nav-link">Make Transaction</a>
                    </li>
                    <li class="nav-item">
                    	<a href="transact_history.php" class="nav-link">Transaction History</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
    	<section class="hero">
            <div class="container">
                <div class="main-message">
                    
                    <h3>Simply a better bank</h3>
                    <h1>ASHU Bank</h1>
                    
                    <p>
                        <i>Building a brighter future, together<br>
                        Smooth banking ahead</i>
                    </p>
                </div>
            </div>
    	</section>
        
        <section>
        	<div class="container">
            	<div class="title-heading">
                	<p><img src="images/hel.jpg" alt="you are safe;in our hands" style="width:200px;height:200px;"></p>
                    
                    <h1>Bottom line, a better value.</h1>
                </div>
                
                <div class="activities-grid">
                	<!-- grid item #1 -->
                    <div class="activities-grid-item user-bg">
                    	<a href="create_user.php"></a>
                        <ion-icon name="person-circle"></ion-icon>
                        <h1>Create account</h1>
                        <p><i>Start your journey by creating user account</i></p>
                        <span class="btn"><a href="create_user.php">CREATE</a></span>
                    </div>
                    <!-- grid item #2 -->
                    <div class="activities-grid-item transact-bg">
                    <a href="make_transaction.php"></a>
                        <ion-icon name="repeat"></ion-icon>
                        <h1>Make Transaction</h1>
                        <p><i>Your transaction is made much easier and safer</i></p>
                        <span class="btn"><a href="make_transaction.php">TRANSFER</a></span>
                  </div>
                    <!-- grid item #3 -->
                    <div class="activities-grid-item history-bg">
                    	<a href="transact_history.php"></a>
                        <ion-icon name="time"></ion-icon>
                        <h1>History</h1>
                        <p><i>Dont worry we are here to maitain your history</i></p>
                        <span class="btn"><a href="transact_history.php">VIEW</a></span>
                    </div>
                    
                </div>
            </div>
        </section>        
    </main>

	<footer>
    	<p>&copy; 2021, All rights reserved</p>
    	<p>Built by <a href="https://www.linkedin.com/in/ashfa-nihar-8bb850210/" target="_blank">ASHFA NIHAR J</a></p>
        <p>Web Dev Intern @ <a href="https://www.linkedin.com/company/the-sparks-foundation/" target="_blank">The Sparks Foundation</a></p>
    </footer>
    <!--Ion Icons-->
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!--Our own javascript-->
    <script type="text/javascript" src="scripts.js"></script>
</body>
</html>