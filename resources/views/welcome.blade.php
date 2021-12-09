<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>WaitHere!</title>
  </head>
  <style>
      body {
          background-color : #FAF2DA;
          font-family:roboto;
      }
      pink .container .button {
          width : 272px;
          height : 69px;

      }
  </style>
  <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
      <div class="navbar" style="background-color: #4A503D; height: 46px">
        <div class="container">
            <div class="row" style="text-align:left;">
                <div class="col-sm-4" >
                    <img src="images/logo.png" style="text-align:left; width:70px; height:70px;margin-top:-20px;margin-left:-50px;">
                </div>
                <div class="col-sm-4" style="color: #FAF2DA">
                    <a href="/" style="color: #FAF2DA; text-decoration: none">About</a>
                </div>
                <div class="col-sm-4" style="color: #FAF2DA">
                    <a href="/list" style="color: #FAF2DA; text-decoration: none">Restaurants</a>
                </div>
            </div>
            <div class="col-sm-3" class="form-outline">
				<input type="search" align="right" id="form1" class="form-control" placeholder="Search" style="margin-left:550px;margin-top: -20px;height:30px; border-radius:30px;font-size:15px; background-color: #FAF2DA" aria-label="Search" />
			</div>
            <div class="col-sm-5">
				<img src="images/user.png" align="right" style="width:40px; height:40px;margin-top:-20px;margin-right:60px;">
			</div>
            <div class="col-sm-8" align="right" style="color: #FAF2DA;margin-top:-70px;margin-left:430px;">
				<a href="/login" style="color: #FAF2DA; text-decoration: none">Login</a>
			</div>
        </div>
      </div>
      <div class="image" >
        <img src="images/waithere!.png" style="width: 1440px; height:790px;">
      </div>
      <div class="pink" style="background-color:#E28F83; height: 350px;box-shadow: 5px 4px 3px #8E9775;">
        <br>
        <div class="container"><br>
            <div class="row" style="text-align:center;">
                <div class="col-sm-3" >
                    <button onclick="window.location='http://127.0.0.1:8000/brunch'" type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA; width: 200px; height:50px; border-radius:40px;">Brunch</button>
                </div>
                <div class="col-sm-3">
                    <button onclick="window.location='http://127.0.0.1:8000/bar'" type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Bar & Lounge</button>
                </div>
                <div class="col-sm-3">
                    <button onclick="window.location='http://127.0.0.1:8000/fastfood'" type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Fast Food</button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Bakery</button>
                </div>
                
            </div>
        </div>
        <br>
        <div class="container"><br>
            <div class="row" style="text-align:center;">
                <div class="col-sm-3" >
                    <button onclick="window.location='http://127.0.0.1:8000/casual'" type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA; width: 200px; height:50px; border-radius:40px;">Casual Dining</button>
                </div>
                <div class="col-sm-3">
                    <button onclick="window.location='http://127.0.0.1:8000/ayce'" type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">All You Can Eat</button>
                </div>
                <div class="col-sm-3">
                    <button onclick="window.location='http://127.0.0.1:8000/beverages'" type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Beverages</button>
                </div>
                <div class="col-sm-3">
                    <button onclick="window.location='http://127.0.0.1:8000/livemusic'" type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Live Music</button>
                </div>
            </div>
        </div>
        <br>
        <div class="container"><br>
            <div class="row" style="text-align:center;">
                <div class="col-sm-3" >
                    <button onclick="window.location='http://127.0.0.1:8000/finedining'" type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA; width: 200px; height:50px; border-radius:40px;">Fine Dining</button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Coffee Shop</button>
                </div>
                <div class="col-sm-3">
                    <button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Dessert</button>
                </div>
                <div class="col-sm-3">
                    <button onclick="window.location='http://127.0.0.1:8000/streetfood'" type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#FAF2DA;width: 200px; height:50px;border-radius:40px;">Street Food</button>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <center>
    <div class="bawah">
        <h1 style="text-shadow: 5px 4px 3px #8E9775;">POPULAR RESTAURANTS</h1>
    </div>
    <div class="container"><br>
		<div class="row" style="text-align:center;">
			<div class="col-sm-4" >
				<img src="images/amuz.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
			</div>
			<div class="col-sm-4">
				<img src="images/hensin.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
			</div>
			<div class="col-sm-4">
				<img src="images/namaaz.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
            
            </div>
		</div>
        <div class="container"><br>
            <div class="row" style="text-align:center;">
                <div class="col-sm-4" >
                    <button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83; width: 278px; height:48px; border-radius:10px;margin-top:-30px;margin-left:-15px;">Amuz At SCBD</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83;width: 278px; height:48px;border-radius:10px;margin-top:-30px;margin-left:0px;">Henshin At The Westin</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83;width: 278px; height:48px;border-radius:10px;margin-top:-30px;margin-left:15px;">Namaaz Dining</button>
                </div>
            </div>
        </div>
    </div>
        <br><br><br> 
        <h1 style="text-shadow: 5px 4px 3px #8E9775;">PEOPLE'S CHOICE</h1>
        <div class="container"><br>
            <div class="row" style="text-align:center;">
                <div class="col-sm-4" >
                    <img src="images/3wise.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
                </div>
                <div class="col-sm-4">
                    <img src="images/pizza.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
                </div>
                <div class="col-sm-4">
                    <img src="images/dear.png" style="box-shadow: 5px 4px 3px #8E9775;width:278px; height:164px;border-radius:10px;">
                
                </div>
            </div>
            <div class="container"><br>
                <div class="row" style="text-align:center;">
                    <div class="col-sm-4" >
                        <button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83; width: 278px; height:48px; border-radius:10px;margin-top:-30px;margin-left:-15px;">3 Wise Monkeys</button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83;width: 278px; height:48px;border-radius:10px;margin-top:-30px;margin-left:0px;">Pizza Place</button>
                    </div>
                    <div class="col-sm-4">
                        <button type="button" class="btn" style="box-shadow: 5px 4px 3px #8E9775;color:#4A503D; background-color:#E28F83;width: 278px; height:48px;border-radius:10px;margin-top:-30px;margin-left:15px;">Dear Butter</button>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </center>
        <div class="footer" style="background-color:#4A503D; height:320px;color: #FAF2DA; margin-top:10px;padding:10px;">
            <br>
            <div class="container">
                <div class="row" style="text-align:left;">
                    <div class="col-sm-4" style="padding:10px;" >
                        <h2 style="text-shadow:4px 3px 2px #8E9775">INFORMATION </h2>
                        <a>Contact Us</a><br>
                        <a>About Us</a><br>
                        <a>Help Centre</a><br>
                    </div>
                    <div class="col-sm-4" style="padding:10px;">
                        <h2 style="text-shadow:4px 3px 2px #8E9775">CUSTOMER CARE </h2>
                        <a style="font-weight:bold">Email</a><br>
                        <i class="fas fa-envelope"></i><a> waithere@gmail.com</a><br><br>
                        <a style="font-weight:bold">Phone Number</a><br>
                        <i class="fas fa-phone"></i> <a>    0857171162617</a><br>
                    </div>
                    <img src="images/logo.png" style=" width:400px;height:400px;margin-top:-220px;margin-left:1000px;">
                </div>
            </div>
        </div>
        <div class="footer2" style="background-color:#8E9775; height:60px;">
</body>