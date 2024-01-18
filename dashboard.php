<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<nav class="sidebar">
  <div class="logo">
    <h5>Miguel<span>Dev</span></h5>
  </div>
  <i id="btn" class="fa-solid fa-bars"></i>
<ul class="nav-links">
            <li>
                <a href="#">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="reservation.php">
                    <i class="fa-solid fa-comment"></i>
                    <span>Reservation</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-sliders"></i>
                    <span>Settings</span>
                </a>
            </li>
           
        </ul>
</nav>

<script>
    
    let btn = document.querySelector('#btn')
        let sidebar = document.querySelector('.sidebar')
        btn.addEventListener('click', ()=> {
            sidebar.classList.toggle('active')
        })

</script>
<div class="topnav">
<a href="logout.php">
<i class="fa-solid fa-arrow-right-from-bracket"></i>
<span>Logout</span>
</a>


</div>


</head>


<body>
<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-bed color-blue"></em>
							<div class="large"><?php include 'counters/room.php'?></div>
							<div class="text-muted">Total Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-bookmark color-orange"></em>
							<div class="large"><?php include 'counters/reserve.php'?></div>
							<div class="text-muted">Reservations</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large"><?php include 'counters/staff.php'?></div>
							<div class="text-muted">Staffs</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-red"></em>
							<div class="large"><?php include 'counters/complaints.php'?></div>
							<div class="text-muted">Complaints</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->

			<hr>

			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-reorder color-red"></em>
							<div class="large"><?php include 'counters/bookedroom.php'?></div>
							<div class="text-muted">Booked Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-check-circle color-green"></em>
							<div class="large"><?php include 'counters/avrooms.php'?></div>
							<div class="text-muted">Available Rooms</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-check-square-o color-magg"></em>
							<div class="large"><?php include 'counters/checkedin.php'?></div>
							<div class="text-muted">Checked In</div>
						</div>
					</div>
				</div>
				
			</div><!--/.row-->

			<hr>

			<div class="row">
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					
				</div>

				
			</div><!--/.row-->
		</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@300&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    background: #f1f4f7;
  font-size: 14px;
  color: #444444;
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.sidebar {
    background-color: #333;
    position: absolute;
    top: 0;
    left: 0;
    width: 100px;
    height: 100vh;
    transition: all .3s ease ;
    padding: 0.6rem 0.8rem;
}
.logo h5 {
    color: #fff;
    font-size: 20px;
    opacity: 0;
}
.logo h5 span {
    color: #fff;
}.sidebar.active .logo h5 {
    opacity: 1;
}
#btn {
    position: absolute;
    color: #fff;
    font-size: 24px;
    top: 1rem;
    left: 2.2rem;
    transition: all .5s ease;
    cursor: pointer;
}
.sidebar.active #btn {
    top: 0.7rem;
    left: 10rem;
}
.nav-links {
    position: relative;
    margin-top: 2em;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.nav-links li {
    position: relative;
    height: 50px;
    list-style-type: none;
    margin: 0.8em auto;
    width: 90%;

}
.nav-links a {
    border-radius: 15px;
    height: 100%;
    width: 100%;
    color: white;
    display: flex;
    align-items: center;
    text-decoration: none;

} 
 .nav-links li span {
    opacity: 0;
}
.sidebar.active .nav-links li span {
    opacity: 1;
}
.nav-links li a:hover {
    background-color: white;
    color: black;
}
.nav-links li a i {
    min-width: 65px;
    text-align: center;
    height: 50px;
    border-radius: 12px;
    line-height: 50px;
} 
.sidebar.active {
    width: 220px;
}
.topnav {
  background-color: #333;
  overflow: hidden;
}
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.panel{
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.panel-container {
  padding-top: 20px;
  padding-left:  100px;
}

</style>
</body>
</html>