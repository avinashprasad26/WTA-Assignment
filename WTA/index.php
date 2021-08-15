<?php

$conn = mysqli_connect('localhost','root','','wta');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}
$query = "select * from reviewform";
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
?>

<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="utf-8">
            <title>Share Your Travels</title>
            <link rel="stylesheet" href="style.css" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
            <style>
                table, th, td {
                border: 1px solid black;
                text-align: left;
                padding: 8px;
                }
                .row {
                display: flex;
                }
                .colu {
                    flex: 50%;
                    padding: 10px;
                    height: 300px;
                }
            </style>
    </head>
    <body id="body_content">
        <header>
            <hgroup>
                <h1>Share Your Travels</h1>
                <h2>let us know where you've been</h2>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="#description">Description</a></li>
                    <li><a href="#related_photo">Related Photos</a></li>
                    <li><a href="#re">Reviews</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <article>
            <section id="description">
                <h3>Description</h3>
                <p class="line">Dhanushkodi</p>
                <div class="row">
                <div class="column">
                    <figure>
                        <a href="images/large-d2.jpg" target="_blank"><img src="images/small-d2.jpg" alt="Dhanushkodi" title="Dhanushkodi"/></a>
                        <figcaption><em>Dhanushkodi in Tamil Naidu</em></figcaption>
                    </figure>
                </div>
                <div class="colu">
                    <table style="width:100%">
                        <tr>
                        <th>Coordinates:</th>
                        <td><a href="https://geohack.toolforge.org/geohack.php?pagename=Dhanushkodi&params=9.152011_N_79.445851_E_type:city_region:IN-TN" target="_blank">  9.152011°N 79.445851°E</a></td>
                        </tr>
                        <tr>
                        <th>Country</th>
                        <td><a href="https://en.wikipedia.org/wiki/India" target="_blank"> India</a></td>
                        </tr>
                        <tr>
                        <th>State</th>
                        <td><a href="https://en.wikipedia.org/wiki/Tamil_Nadu" target="_blank"> Tamil Naidu</a></td>
                        </tr>
                        <tr>
                        <th>Distict</th>
                        <td><a href="https://en.wikipedia.org/wiki/Ramanathapuram_district" target="_blank"> Ramanathapuram </a></td>
                        </tr>
                        <tr>
                        <th>Destroyed</th>
                        <td><a href="https://en.wikipedia.org/wiki/1964_Rameswaram_cyclone" target="_blank"> 1964 </a></td>
                        </tr>
                        <tr>
                        <th>Elevation</th>
                        <td>0 m(0 ft)</td>
                        </tr>
                        <tr>
                        <th>Time Zone</th>
                        <td><a href="https://en.wikipedia.org/wiki/UTC%2B05:30" target="_blank"> UTC+05:30(IST) </a></td>
                        </tr>
                        <tr>
                        <th>Telephone Code</th>
                        <td>+04567</td>
                        </tr>
                    </table>
                </div>
                </div><br>
                <p>This photo of abandoned town at the south-eastern tip of Pamban Island in 
                <a href="https://en.wikipedia.org/wiki/Dhanushkodi" target="_blank">Dhanushkodi</a> of the state of 
                <a href="https://en.wikipedia.org/wiki/Tamil_Nadu" target="_blank"> Tamil Naidu, India.</a> was taken on 13 March, 2021 with Dji Tello Drone.
                </p>
            </section>
            <br>
            <section id="related_photo">
                <div>
                    <h3>Related Photos</h3>
                </div>
                <div>
                    <a href="images/large-d1.jpg" target="_blank"><img src="images/small-d1.jpg" alt="related photo" title="related photo" /></a>
                    <a href="images/large-d3.jpg" target="_blank"><img src="images/small-d3.jpg" alt="related photo" title="related photo" /></a>
                    <a href="images/large-d4.jpg" target="_blank"><img src="images/small-d4.jpg" alt="related photo" title="related photo" /></a>
                    <a href="images/large-d5.jpg" target="_blank"><img src="images/small-d5.jpg" alt="related photo" title="related photo" /></a>
                </div>
            </section>
            <br><br>

            <section class="re" id="re">
                    <h3>Reviews</h3>
                <form action="connection.php" method="POST">
                    <label  for="firstname">First Name :</label>
                        <input type="text" class="area" name="firstname" style="margin-left: 25px;" value=""> <br>

                    <label for="lastname">Last Name :</label>
                         <input type="text" class="area" name="lastname" style="margin-left: 25px;" value=""><br>

                    <label for="date">Date :</label>
                        <input type="date" class="area" name="dates" style="margin-left: 48px;" value=""><br>

                    <label for="review" class="ta">Your Review :</label>
                        <textarea rows="8" cols="20" type="text" class="area" name="review" style="margin-left: 120px; resize: none;" value=""></textarea><br>

                    <input type="submit" class="btn btn-info" name="submit" value="Submit"><br><br><br>
                </form>
            </section>
            <section id="reviews">
                <?php
                        while($rows=mysqli_fetch_assoc($data))
                        {
                          ?>
                <div>
                    <p>By <?php echo $rows['firstname'] ?> <?php echo $rows['lastname'] ?> on <?php echo $rows['dates'] ?></p>
                    <p><?php echo $rows['review'] ?></p>
                </div>
                <?php
            }
            ?>   
            </section>
            <br><br>
            <section id="contact">
                <div>
                    <h3>Contact</h3>
                </div>
                <br><br>
                <div style="text-align: center;">
                    <p class="contact-message">Get In Touch With Me On</p>
                    <a class="fa fa-whatsapp" href="https://api.whatsapp.com/send?phone=917004806734" target="_blank" style="font-weight:900;">WhatsApp</a><br><br>
                    <a href="https://www.facebook.com/avinash.prasad.31924/" target="_blank" class="fa fa-facebook " style="margin-right: 16px; text-decoration: none; "></a>
                    <a href="https://www.linkedin.com/in/avinash-prasad-25966719a " target="_blank" class="fa fa-linkedin " style="margin-right: 16px;text-decoration: none; "></a>
                    <a href="https://github.com/avinashprasad26" target="_blank" class="fa fa-github " style="margin-right: 16px;text-decoration: none; "></a>
                    <a href="https://www.instagram.com/avinashprasad26 " target="_blank" class="fa fa-instagram " style="margin-right: px;text-decoration: none; "></a>
                </div>
            </section>
        </article>
        <footer style="text-align: center;">
            <p><a href="#body_content" target="_blank">Home</a> | <a href="https://en.wikipedia.org/wiki/Dhanushkodi" target="_blank">Browse</a> | <a href="https://www.google.co.in/" target="_blank">Search</a></p>
            <p><em>Copyright &copy; 2021 Share Your Travels</em></p>
        </footer>
    </body>
</html>