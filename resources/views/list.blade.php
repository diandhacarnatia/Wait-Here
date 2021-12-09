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
    <link rel="icon" type="images/png" href="images/logo.png">
    <title>Restaurant List</title>
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
                    <a href="/login" style="color: #FAF2DA; text-decoration: none">Login</a>
                </div>
            </div>
          </div>
          <br><br>
          <div class="resto1" style="height: 70;">
        <div class=container>
            <div class="row" style="text-align:left;">
            <div class="col-sm-3">
                <img src="images/list_bottega.png" style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
            </div>
            <div class="col-sm-6">
                <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                    BOTTEGA RISTORANTE
                </div> <br>
                <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Senin - Minggu</a>
                <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 10.00 - 21.00</a>
                <div class="row" style="margin-top: 20px; margin-left: 240px;">
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="far fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="far fa-star fa-3x" style="color:#ba9b4a; "></i>
                </div>
                <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                    <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
                </div>
            </div>
                </div>
        </div>
        </div><br><br>

            <div class="resto2" style="height: 70;">
                <div class=container>
                    <div class="row" style="text-align:left;">
                    <div class="col-sm-3">
                        <img src="images/list_skye.png" style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                    </div>
                    <div class="col-sm-6">
                        <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                            SKYE
                        </div> <br>
                        <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Senin - Minggu</a>
                        <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 10.00 - 21.00</a>
                        <div class="row" style="margin-top: 20px; margin-left: 240px;">
                            <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                            <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                            <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                            <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                            <i class="far fa-star fa-3x" style="color:#ba9b4a; "></i>
                        </div>
                        <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                            <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
                        </div>
                    </div>
                        </div>
                </div>
                </div><br><br>

          <div class="resto3" style="height: 70;">
        <div class=container>
            <div class="row" style="text-align:left;">
            <div class="col-sm-3">
                <img src="images/list_3wise.png" style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
            </div>
            <div class="col-sm-6">
                <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                    3 WISE MONKEY
                </div> <br>
                <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Senin - Minggu</a>
                <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 10.00 - 21.00</a>
                <div class="row" style="margin-top: 20px; margin-left: 240px;">
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="fas fa-star-half-alt fa-3x" style="color:#ba9b4a; "></i>

                </div>
                <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                    <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
                </div>
            </div>
                </div>
        </div>
        </div><br><br>
        <div class="resto4" style="height: 70;">
            <div class=container>
                <div class="row" style="text-align:left;">
                <div class="col-sm-3">
                    <img src="images/list_dearbutter.png" style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                </div>
                <div class="col-sm-6">
                    <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                        DEAR BUTTER
                    </div> <br>
                    <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Senin - Minggu</a>
                    <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 11.00 - 21.00</a>
                    <div class="row" style="margin-top: 20px; margin-left: 240px;">
                        <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                        <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                        <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                        <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                        <i class="fas fa-star-half-alt fa-3x" style="color:#ba9b4a; "></i>

                    </div>
                    <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                        <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
                    </div>
                </div>
                    </div>
            </div>
            </div><br><br>
            <div class="resto5" style="height: 70;">
                <div class=container>
                    <div class="row" style="text-align:left;">
                    <div class="col-sm-3">
                        <img src="images/list_delicious.png" style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                    </div>
                    <div class="col-sm-6">
                        <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                            DELICIOUS CAKE & BAKERY
                        </div> <br>
                        <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Senin - Minggu</a>
                        <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 09.00 - 20.00</a>
                        <div class="row" style="margin-top: 20px; margin-left: 240px;">
                            <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                            <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                            <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                            <i class="far fa-star fa-3x" style="color:#ba9b4a; "></i>
                            <i class="far fa-star fa-3x" style="color:#ba9b4a; "></i>

                        </div>
                        <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                            <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
                        </div>
                    </div>
                        </div>
                </div>
                </div><br><br>
                <div class="resto6" style="height: 70;">
                    <div class=container>
                        <div class="row" style="text-align:left;">
                        <div class="col-sm-3">
                            <img src="images/list_ecaps.png " style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                        </div>
                        <div class="col-sm-6">
                            <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                                ECAPS
                            </div> <br>
                            <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Senin - Minggu</a>
                            <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 09.00 - 20.00</a>
                            <div class="row" style="margin-top: 20px; margin-left: 240px;">
                                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                <i class="fas fa-star-half-alt fa-3x" style="color:#ba9b4a; "></i>

                            </div>
                            <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                                <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
                            </div>
                        </div>
                            </div>
                    </div>
                    </div>
        <br><br>
                <div class="resto7" style="height: 70;">
                    <div class=container>
                        <div class="row" style="text-align:left;">
                        <div class="col-sm-3">
                            <img src="images/list_union.png" style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                        </div>
                        <div class="col-sm-6">
                            <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                                UNION
                            </div> <br>
                            <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Monday - Thursday</a>
                            <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 10.00 - 21.00</a>
                            <div class="row" style="margin-top: 20px; margin-left: 240px;">
                                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>

                            </div>
                            <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                                <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
                            </div>
                        </div>
                            </div>
                    </div>
                    </div><br><br>
                        <div class="resto8" style="height: 70;">
                            <div class=container>
                                <div class="row" style="text-align:left;">
                                <div class="col-sm-3">
                                    <img src="images/list_awan.png" style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                                </div>
                                <div class="col-sm-6">
                                    <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                                        THE AWAN LOUNGE
                                    </div> <br>
                                    <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Tuesday - Sunday</a>
                                    <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 16.00 - 21.00</a>
                                    <div class="row" style="margin-top: 20px; margin-left: 240px;">
                                        <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                        <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                        <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                        <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                        <i class="far fa-star fa-3x" style="color:#ba9b4a; "></i>
                                    </div>
                                    <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                                        <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
                                    </div>
                                </div>
                                    </div>
                            </div>
                            </div><br><br>
                                    <div class="resto9" style="height: 70;">
                                        <div class=container>
                                            <div class="row" style="text-align:left;">
                                            <div class="col-sm-3">
                                                <img src="images/list_namaaz.png" style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
                                            </div>
                                            <div class="col-sm-6">
                                                <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                                                    Namaaz Dining
                                                </div> <br>
                                                <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Tuesday - Saturday</a>
                                                <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 19.00 - 23.00</a>
                                                <div class="row" style="margin-top: 20px; margin-left: 240px;">
                                                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                                                    <i class="fas fa-star-half-alt fa-3x" style="color:#ba9b4a; "></i>
                                                </div>
                                                <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                                                    <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
                                                </div>
                                            </div>
                                                </div>
                                        </div>
                                        </div>
                                    <br><br>
<div class="resto10" style="height: 70;">
        <div class=container>
            <div class="row" style="text-align:left;">
            <div class="col-sm-3">
                <img src="images/list_honu.png " style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
            </div>
            <div class="col-sm-6">
                <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                    HONU POKE & MATCHA BAR
                </div> <br>
                <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Senin - Minggu</a>
                <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 10.00 - 21.00</a>
                <div class="row" style="margin-top: 20px; margin-left: 240px;">
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                    <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>

                </div>
            <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
            </div>
        </div>
            </div>
    </div>
    </div>
<br><br>
<div class="resto11" style="height: 70;">
    <div class=container>
        <div class="row" style="text-align:left;">
        <div class="col-sm-3">
            <img src="images/list_kkuldak.png " style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
        </div>
        <div class="col-sm-6">
            <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                KKULDAK
            </div> <br>
            <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Senin - Minggu</a>
            <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 10.00 - 22.00</a>
            <div class="row" style="margin-top: 20px; margin-left: 240px;">
                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                <i class="fas fa-star-half-alt fa-3x" style="color:#ba9b4a; "></i>

            </div>
            <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
            </div>
        </div>
            </div>
    </div>
    </div>
<br><br>
<div class="resto12" style="height: 70;">
    <div class=container>
        <div class="row" style="text-align:left;">
        <div class="col-sm-3">
            <img src="images/list_pepper.png" style="text-align:left; width:300px; height:290px;margin-top:30px;margin-left:70px;box-shadow: 5px 4px 3px #8E9775;border-radius:10px;">
        </div>
        <div class="col-sm-6">
            <div style="width: 700px; height: 45px; background-color:#e28f83;color:#4a503d; text-align: center; padding-top: 7px; margin-left: 200px; box-shadow: 5px 4px 3px #8E9775;border-radius:10px; font-size:23px; letter-spacing: 10px;">
                PEPPER LUNCH - KOTA KASABLANKA
            </div> <br>
            <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> Senin - Minggu</a>
            <a style="color:#4a503d; margin-left: 250px; font-size: 20px; letter-spacing: 7px;"> 10.00 - 22.00</a>
            <div class="row" style="margin-top: 20px; margin-left: 240px;">
                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                <i class="fas fa-star fa-3x" style="color:#ba9b4a; "></i>
                <i class="fas fa-star-half-alt fa-3x" style="color:#ba9b4a; "></i>

            </div>
            <div class="col-sm-4" style="width: 150px; height: 60px; background-color: #8e9775; text-align: center; margin-left: 750px; margin-top: 70px; box-shadow: 2px 2px 2px #8E9775;border-radius:10px;">
                <button type="button" class="btn" style="padding-top: 15px; color: #FAF2DA; font-size: 18px;">More Details</button>
            </div>
        </div>
            </div>
    </div>
    </div>
<br><br>


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
                    <img src="images/logo.png" style=" width:400px;height:400px;margin-top:-220px;margin-left:1000px;">
                </div>
            </div>
        </div>
        <div class="footer2" style="background-color:#8E9775; height:60px;"></div>
    </body>
