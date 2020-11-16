<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="./logo.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ALPINE REAL ESTATE</title>

    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="../node_modules\sweetalert2\dist\sweetalert2.min.css">
</head>

<body>
    <div class="top">
        <?php
        include 'header.php'

        ?>
        <section>
            <div class="banner">
                <div class="thumb">
                    <img src="./images/bn1.jpg" alt="" />
                    <img src="./images/bn2.jpg" alt="" />
                    <img src="./images/bn3.jpg" alt="" />
                    <img src="./images/bn4.jpg" alt="" />
                </div>
                <div class="text">
                    <h2>OWN A HOME TODAY</h2>
                    <p>Welcome to our real estate company</p>
                    <form>
                        <input type="text" name="srch" id="srch" required placeholder="Find your dream apartment" />
                        <button type="submit">Find</button>
                    </form>
                </div>
                <div class="prev">&lt;</div>
                <div class="next">&gt;</div>
                <div class="slide-nav">
                    <div class="nav-dot dot-active">1</div>
                    <div class="nav-dot">2</div>
                    <div class="nav-dot">3</div>
                    <div class="nav-dot">4</div>
                </div>
            </div>
            <div id="about">
                <h2>About Us</h2>
                <div class="content">
                    <div class="text">
                        <h3>ALPINE REAL ESTATE COMPANY</h3>
                        <p>
                            ALPINE is one of the best real estate companies in Nairobi. We
                            offers investment developments around the city.
                        </p>
                        <p>
                            Advising national and international commercial and residential
                            developers, investors, owners and occupiers we fulfill a wide
                            range of real estate needs, including: property management,
                            agency, valuation, project management, feasibility and
                            research-led consultancy.
                        </p>
                        <a href="#">Read more</a>
                    </div>
                    <div class="thumb">
                        <div class="thumb-box">
                            <img class="lazy" src="" data-src="./images/company1.jpg" alt="" />
                            <h3>HEADQUATERS</h3>
                        </div>
                        <div class="thumb-box">
                            <img class="lazy" src="" data-src="./images/company2.jpg" alt="" />
                            <h3>BOARDROOM</h3>
                        </div>
                    </div>
                </div>
                <div class="partner">
                    <h3>EXCECUTIVE TEAM</h3>
                    <div class="thumb">
                        <div class="thumb-box">
                            <img class="lazy" src="" data-src="./images/partner1.jpg" alt="" />
                            <h3>DAVE WILIAMS</h3>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <p>
                                Dave Williams is Alpine's chief information and digital
                                officer. Under his direction the technology organization is
                                focused on to leverage digital solutions to serve customers
                                and achieve business value.
                            </p>
                            <a href="#">CIO</a>
                        </div>
                        <div class="thumb-box">
                            <img class="lazy" src="" data-src="./images/partner2.jpg" alt="" />
                            <h3>JOHN CONNOR</h3>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <p>
                                John Conner is the CEO .Drive strategic planning, business
                                development, and fiscal operations. Establish positive
                                relationships with stakeholders and other business leaders.
                            </p>
                            <a href="#">CEO</a>
                        </div>
                        <div class="thumb-box">
                            <img class="lazy" src="" data-src="./images/partner3.jpg" alt="" />

                            <h3>MARY DIANA</h3>
                            <div class="social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <p>
                                Mary Diana is incharge of conducting market research to
                                determine a target audience's needs, wants, habits, interests
                                and other relevant factors used in creating targeted marketing
                                campaigns
                            </p>
                            <a href="#">MARKETING</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ---------------------Properties--------------------------------------------- -->
            <div id="properties">
                <h2>ON SALE</h2>
                <div class="content">
                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties1.jpg" alt="" />
                        <div class="text">
                            <h3>Properties01</h3>
                            <span>KSH 30 Million</span>
                            <p>
                                Prime 4.9 acres redevelopment land with a 5 bedroom
                                ambassadorial house with detached staff quarters, swimming
                                pool, generator house and guard houses. The property .
                            </p>
                            <div class="details">
                                <span>4.9 Acres</span>
                                <span>5 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                            <a href="#">KAREN</a>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties2.jpg" alt="" />
                        <div class="text">
                            <h3>Properties02</h3>
                            <span>$KSH 18 MILLION</span>
                            <p>
                                On 0.87 acre plot, a 4 bedroom maisonette with a detached
                                servants quarter. The property is located along Ngong road.
                            </p>
                            <div class="details">
                                <span>0.87 acres</span>
                                <span>4 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                            <a href="#">NGONG'</a>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties3.jpg" alt="" />
                        <div class="text">
                            <h3>Properties03</h3>
                            <span>KSH 50 Million</span>
                            <p>
                                8 x 4 bedroom semi detached town houses and 2 x 4 stand alone
                                townhouses. Outside is a 2 car parking space, kitchen yard, .
                            </p>
                            <div class="details">
                                <span>1200 sq ft</span>
                                <span>4 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                            <a href="#">LANGATA</a>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties4.jpg" alt="" />
                        <div class="text">
                            <h3>Properties04</h3>
                            <span>KSH 300 Million</span>
                            <p>
                                Approximately 0.749 of an acre. The development comprises a
                                dated 3 bedroom, 1 bathroom and 2 showers bungalow which is
                                well maintained
                            </p>
                            <div class="details">
                                <span>0.749 acres</span>
                                <span>3 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                            <a href="#">UPPERHILL</a>
                        </div>
                    </div>
                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties5.jpg" alt="" />
                        <div class="text">
                            <h3>Properties05</h3>
                            <span>KSH 9 Million</span>
                            <p>
                                On 0.5 acres, a 4 bedroom bungalow with servants quarter. It
                                is situated in Parklands along Daisy Road.
                            </p>
                            <div class="details">
                                <span>0.5 acres</span>
                                <span>4 bedrooms</span>
                                <span>1 bathroom</span>
                            </div>
                            <a href="#">PARKLANDS</a>
                        </div>
                    </div>
                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties6.jpg" alt="" />
                        <div class="text">
                            <h3>Properties06</h3>
                            <span>KSH 4 Million</span>
                            <p>
                                2 x 3 bedroom (master en-suite) bungalows in a gated
                                community. They are situated along Quarry Road in Syokimau
                                near Weigh Bridge.
                            </p>
                            <div class="details">
                                <span>100 sq ft</span>
                                <span>3 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                            <a href="#">SYOKIMAU</a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties1.jpg" alt="" />
                        <div class="text">
                            <h3>Properties07</h3>
                            <span>ksh 3 Million</span>
                            <p>
                                The development comprises an architect designed part double,
                                part single storey residence having 4 bedroom (all en-suite)
                                and an attached guest wing having 3 bedroom .
                            </p>
                            <div class="details">
                                <span>1200 sq ft</span>
                                <span>4 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                            <a href="#">KASARANI</a>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties2.jpg" alt="" />
                        <div class="text">
                            <h3>Properties08</h3>
                            <span>KSH 9 Million</span>
                            <p>
                                On approximately 0.96 of an acre, an old bungalow comprising
                                of 4 bedroom, 2 bathroom, 1 shower room and a detached
                                servants quarter
                            </p>
                            <div class="details">
                                <span>0.96 Acres</span>
                                <span>4 bedrooms</span>
                                <span>1 bathroom </span>
                            </div>
                            <a href="#">KITENGELA</a>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties3.jpg" alt="" />
                        <div class="text">
                            <h3>Properties09</h3>
                            <span>KSH 5 Million</span>
                            <p>
                                On 1/8 acre, a 3 bedroom bungalow with servant quarters. It
                                has automatic security lights, zuku, generator, borehole and
                                safaricom internet
                            </p>
                            <div class="details">
                                <span>0.8 acres</span>
                                <span>3 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                            <a href="#">ATHIRIVER</a>
                        </div>
                    </div>

                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties4.jpg" alt="" />
                        <div class="text">
                            <h3>Properties10</h3>
                            <span>KSH 9 MILLION</span>
                            <p>
                                On approximately 0.96 of an acre, an old bungalow comprising
                                of 4 bedroom, 2 bathroom, 1 shower room and a detached
                                servants quarter.
                            </p>
                            <div class="details">
                                <span>0.96 acres</span>
                                <span>4 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                            <a href="#">JUJA</a>
                        </div>
                    </div>
                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties5.jpg" alt="" />
                        <div class="text">
                            <h3>Properties11</h3>
                            <span>KSH 7.7 MILLION</span>
                            <p>
                                Approximately 0.87 of an acre. A residential bungalow having 3
                                bedroom, 2 bathroom with access to a garage. Outbuildings
                                comprise a servant quarters .
                            </p>
                            <div class="details">
                                <span>a garage</span>
                                <span>4 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                            <a href="#">THIKA</a>
                        </div>
                    </div>
                    <div class="box">
                        <img class="lazy" src="" data-src="./images/properties6.jpg" alt="" />
                        <div class="text">
                            <h3>Properties12</h3>
                            <span>KSH 9.9 MILLION</span>
                            <p>
                                Approximately 0.933 of an acre. A residential bungalow having
                                3 bedroom, 2 bathroom, 1 shower room with access to a garage.
                                Outbuildings comprise
                            </p>
                            <div class="details">
                                <span>0.933</span>
                                <span>3 bedrooms</span>
                                <span>2 bathrooms</span>
                            </div>
                            <a href="#">KISUMU</a>
                        </div>
                    </div>
                </div>

                <a href="#" class="view">View ALL Properties</a>
            </div>

            <div id="services">
                <h2>Our Services</h2>
                <p>
                    Alpine offers a wide range of fully integrated real estate services
                    through residential properties to a diverse clientele.
                </p>
                <div class="content">
                    <div class="card">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h3>Find Places Any in Kenya</h3>
                    </div>
                    <div class="card">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <h3>We Have Experienced Agents</h3>
                    </div>
                    <div class="card">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <h3>Buy Or Rent Sales Properties</h3>
                    </div>
                    <div class="card">
                        <i class="fa fa-mixcloud" aria-hidden="true"></i>
                        <h3>Find Your Dream Home</h3>
                    </div>
                </div>
                <div class="content">
                    <div class="card">
                        <img class="lazy" src="" data-src="./images/services1.jpg" alt="" />
                        <h3>PROPERTY SALES</h3>
                        <p>
                            We offer industry leading property marketing and acquisition
                            services because we know buying or selling property can be a
                            complicated and overwhelming process. We ensure that we
                            thoroughly educate our clients prior selling or buying property
                            on their behalf.
                        </p>
                    </div>
                    <div class="card">
                        <img class="lazy" src="" data-src="./images/services2.jpg" alt="" />
                        <h3>PROPERTY RENTING</h3>
                        <p>
                            Alpine is your one stop agency for all your property rental
                            needs. We have a comprehensive listing of available residential
                            and commercial units to suits a wide variety of clients. We
                            offer the best and most flexible property letting service in the
                            East African region.
                        </p>
                    </div>
                    <div class="card">
                        <img class="lazy" src="" data-src="./images/services3.jpg" alt="" />
                        <h3>PROPERTY MANAGEMENT</h3>
                        <p>
                            The administration and management of residential and commercial
                            properties is among alpines core competences, along with our
                            sales and leasing activities. Through our subsidiary Alpine
                            Management policy, we offer world-class property management.
                        </p>
                    </div>
                </div>
                <h2>Client Reviews</h2>
                <div class="content">
                    <div class="card circle">
                        <img class="lazy" src="" data-src="./images/review1.jpg" alt="" />
                        <div class="text">
                            <h3>SCOTT GRAHAM</h3>
                            <h4>Techsavvanah</h4>
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p>
                                "Alpine helped me buy my first house. He helped me narrow down
                                what kind of home I was looking for and was patient as I
                                dragged him through dozens of open houses. Chris was
                                knowledgeable, thoughtful, and hard working."
                            </p>
                        </div>
                    </div>
                    <div class="card circle">
                        <img class="lazy" src="" data-src="./images/review2.jpg" alt="" />

                        <div class="text">
                            <h3>Alexandra Miley</h3>
                            <h4>Sendy</h4>
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p>
                                "Working with Alpine exceeded all of my expectations. As a
                                first time homebuyer, I was not familiar with the terminology
                                or the best process people to involve."
                            </p>
                        </div>
                    </div>
                    <div class="card circle">
                        <img class="lazy" src="" data-src="./images/review3.jpg" alt="" />

                        <div class="text">
                            <h3>DIANA JONES</h3>
                            <h4>United Nations</h4>
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                            <p>
                                "Alpine was recommended to me by a work colleague and it
                                provided excellent service from the beginning of the process
                                and continues to, well after closing. I highly recommend
                                Alpine without any reservations."
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contact">
                <h2>Contact Us</h2>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p style="color:red">please fill all fields</p>';
                    } elseif ($_GET['error'] == 'detailserror') {
                        echo '<p style="color:red">incorrect details</p>';
                    } elseif ($_GET['error'] == 'invalidemail') {
                        echo '<p style="color:red">incorrect email format</p>';
                    }
                }
                if (isset($_GET['contact'])) {
                    if ($_GET['contact'] == 'success') {
                        echo '<p style="color:green">Message sent successfully</p>';
                    }
                }
                ?>
                <div class="content">
                    <form method="POST" action="../includes/contact.php">
                        <input type="text" name="name" id="name" required placeholder="Your Name" />
                        <input type="email" name="mail" id="mail" required placeholder="Your Email" />
                        <input type="tel" name="tel" id="tel" required placeholder="Phone Number" />
                        <textarea name="mess" id="mess" rows="7" placeholder="Your Message Here..."></textarea>
                        <button type="submit" name="contact">
                            Send <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </form>
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.165913219984!2d36.8132235!3d-1.2999367!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0ed00f15f7f1a03!2sBritam%20Tower!5e0!3m2!1sen!2sus!4v1601988141609!5m2!1sen!2sus"
                            width="600" height="450" frameborder="0" style="border: 0" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                        <h3><i class="fa fa-comments"></i> COMMUNICATION</h3>
                        <p>
                            For General Queries, Including Property Sales And Constructions,
                            Please Email Us At <span>alpine@gmail.Com</span>
                        </p>
                    </div>
                    <div class="text">
                        <h3><i class="fa fa-life-ring"></i> TECHNICAL SUPPORT</h3>
                        <p>
                            We Are Ready To Help! If You Have Any Queries Or Issues, Contact
                            Us For Support <span>+254740135141.</span>
                        </p>
                    </div>
                    <div class="text">
                        <h3><i class="fa fa-map"></i> OTHERS</h3>
                        <p>
                            For General Queries, Including Property Sales And Constructions,
                            Please Email Us At <span>alpine@gmail.Com</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="content">
            <div class="box">
                <h2>WHO WE ARE</h2>
                <p>
                    ALPINE is one of the best real estate companies in Nairobi. We
                    offers investment developments around the city.
                </p>
                <h3>Trusted by more than 1 Million people</h3>
            </div>
            <div class="box">
                <h2>CONTACT US</h2>
                <h3><i class="fa fa-map-marker"></i> Location</h3>
                <p>Britam Towers 3rd Floor</p>
                <h3><i class="fa fa-phone"></i> Phone</h3>
                <p>+254740135141</p>
                <h3><i class="fa fa-envelope-o"></i> Email</h3>
                <p>alpine@gmail.com</p>
            </div>
            <div class="box">
                <h2>LATEST NEWS</h2>
                <h3><i class="fa fa-twitter"></i>alpinerealesate</h3>
                <p>
                    These are contemporary townhouses which are tastefully finished
                    consisting of 4, 5 and 6 bedroom all ensuite each on ¼ acre, with
                    open plan living, dining, and kitchen space. With 2 and 3 level
                    designs, residents are sure feel at home in one of the most high
                    profile suburbs of Nairobi.
                </p>
                <h3><i class="fa fa-twitter"></i> alpinerealestate</h3>
                <p>
                    In close proximity to some of the best schools, fine dining
                    restaurants, entertainment areas and high-end shopping malls,
                    Duchess Park towers above Lavington suburb and has changed the
                    skyline of the area.
                </p>
            </div>
        </div>
        <div class="row">
            <p>
                &copy; 2020 Alpine Real Estate . All Rights Reserved | Design by
                <span>Phares Muhambi</span>
            </p>
            <div class="social">
                <a href="#"><i class="fa fa-facebook"></i> facebook</a>
                <a href="#"><i class="fa fa-twitter"></i> twitter</a>
                <a href="#"><i class="fa fa-instagram"></i> instagram</a>
                <a href="#"><i class="fa fa-linkedin"></i> linkedin</a>
            </div>
        </div>
    </footer>

    <div class="topp">
        <a href="#"> &#11165; </a>
    </div>

    <script src="App.js"></script>

</body>

</html>