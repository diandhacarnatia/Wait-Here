<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/reservasii.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link rel="icon" type="images/png" href="images/logo.png">
        <title>Reservation</title>
    </head>
    <style>
        body {
            background-color: #FAF2DA;
            font-family:roboto;
        }
    </style>
    <body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
        <div class="navbar" style="background-color: #4A503D; height: 46px">
        <div class="container">
            <div class="row" style="text-align: left;">
                <div class="col-sm-4">
                    <img src="images/logo.png" style="text-align: right; width: 70px; height: 70px; margin-top: -20px; margin-left: -50px;">
                </div>
                <div class="col-sm-4" style="color: #FAF2DA">
                    <a>About</a>
                </div>
                <div class="col-sm-4" style="color: #FAF2DA">
                    <a>Restaurants</a>
                </div>
            </div>
            <div class="col-sm-3" class="form-outline">
    <input type="search" align="right" id="form1" class="form-control" placeholder="Search" style="margin-left:550px;margin-top: -20px;height:30px; border-radius:30px;font-size:15px; background-color: #FAF2DA" aria-label="Search" />
   </div>
            <div class="col-sm-5">
    <img src="images/user.png" align="right" style="width:40px; height:40px;margin-top:-20px;margin-right:60px;">
   </div>
            <div class="col-sm-8" align="right" style="color: #FAF2DA;margin-top:-70px;margin-left:430px;">
    <a>Login</a>
   </div>
            </div>
        </div>


        <center>
            <img src="images/logo.png" style="width:1500px; height:1200px;margin-left:-700px;margin-top:-300px;position:absolute;opacity:0.3;">
            <h1><u>RESERVATION</u></h1>
        <div class="box" align="center"style="position:relative;">
            <div class="content" align="left" style="padding-left:50px;">
                <form><br><br><br>
                    <div class="dropdown">
                    <label for="nama" style="font-size:20px; font-weight:bold;">Nama Restauran : </label><br>
                    <select name="restaurant" >
                        <optgroup label="Brunch">
                          <option>Union</option>
                          <option>Pippo</option>
                          <option>SEL Gunawarman</option>
                        <optgroup label="Bar & Lounge">
                          <option>The Awan Lounge</option>
                          <option>Tipsy Monkey Bar & Lounge</option>
                          <option>Kilo Lounge Jakarta</option>
                        <optgroup label="Fine Dining">
                          <option>Amuz at SCBD</option>
                          <option>Namaaz Dining </option>
                          <option>Henshin at The Westin</option>
                        <optgroup label="Casual Dining">
                          <option>Bottega Ristorante</option>
                          <option>Le Quartier </option>
                          <option>Hause Rooftop</option>
                        <optgroup label="All You Can Eat">
                          <option>Kintan Buffet</option>
                          <option>Gyukaku Japanese BBQ</option>
                          <option>Shabu Hachi</option>
                          <option>3 Wise Monkeys</option>
                        <optgroup label="Live Music">
                          <option>SKYE</option>
                          <option>Piston Brake Bikers</option>
                     </select>
                    </div>
                     <div class="col-sm-3" >
                        <br><a style="font-size:20px; font-weight:bold;"> Tanggal</a>
                        <input style="width:200px;height:30px; margin-top:10px; text-align:left; border-radius: 10px; background-color: rgba(250.00000029802322, 242.00000077486038, 218.00000220537186, 1)" type="date" id="date" name="date"><br><br>
                    </div>

                    <div class="dropdown">
                    <label for="time" style="font-size:20px; font-weight:bold;">Waktu Pemesanan : </label><br>
                    <select name="time" style="">
                        <option>10.00 - 12.00 WIB</option>
                        <option>13.00 - 15.00 WIB</option>
                        <option>16.00 - 18.00</option>
                        <option>19.00 - 21.00</option>
                     </select> <br>
                    </div>

                     <br><div class="col-sm-6" >
                        <a style="font-size:20px; font-weight:bold;">Jumlah Pengunjung</a>
                        <textarea  id="guest" name="guest" rows="1" cols="5"></textarea>
                    </div><br>
                    <center>
                    <input style="border: none; margin-left:-50px;
                    color: rgba(250.00000029802322, 242.00000077486038, 218.00000220537186, 1);
                    font-size: 15px;
                    font-family: Roboto;
                    font-size:22px;
                    border-radius: 20px;
                    margin-top: 30px;
                    background: rgba(74.0000031888485, 80.00000283122063, 61.00000016391277, 1);" onclick="window.location='http://127.0.0.1:8000/struk'" type="submit" id="reserve" name="reserve" value="Reserve">
                </center>
                </form>
            </div>
        </div>
    </center>


    <div class="footer" style="background-color:#4A503D; height:320px;color: #FAF2DA; margin-top:10px;padding:10px;">
        <br>
        <div class="container">
            <div class="row" style="text-align:left;">
                <div class="col-sm-4" style="padding:10px;" >
                    <h2 style="text-shadow:4px 3px 2px #8E9775">INFORMATION </h2><br>
                    <a>Contact Us</a><br>
                    <a>About Us</a><br>
                    <a>Help Centre</a><br>
                </div>
                <div class="col-sm-4" style="padding:10px;">
                    <h2 style="text-shadow:4px 3px 2px #8E9775">CUSTOMER CARE </h2><br>
                    <a style="font-weight:bold">Email</a><br>
                    <i class="fas fa-envelope"></i><a> waithere@gmail.com</a><br><br>
                    <a style="font-weight:bold">Phone Number</a><br>
                    <i class="fas fa-phone"></i> <a>    0857171162617</a><br>
                </div>
                <img src="images/logo.png" style=" width:300px; height:300px; margin-top:-220px; margin-left:900px;">
            </div>
        </div>
    </div>
    <div class="footer2" style="background-color:#8E9775; height:60px;"

    </body>
</html>
