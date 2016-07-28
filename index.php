<?php
include "includes/header.php";
?>
        <!-- BANNER SLIDER -->
        <section class="section-slider">

            <div class="banner-slider" id="banner-slider">

                <!-- ITEM -->
                <div class="slider-item text-center" data-image="images/slider/img-1.jpg">
                    <div class="slider-text">
                        <span class="slider-caption-sub slider-caption-sub-1">Villa</span>
                        <h2 class="slider-caption slider-caption-1">Marisol</h2>
                        <span class="slider-caption-sub slider-caption-sub-1">Deluxe</span>
                    </div>
                </div>
                <!-- ITEM -->

            </div>

        </section>
        <!-- END / BANNER SLIDER -->

        <!-- CHECK AVAILABILITY -->
        <section class="section-check-availability">
            <div class="container">
                <div class="check-availability">
                    <div class="row">
                        <div class="col-lg-3">
                            <h2>CHECK AVAILABILITY</h2>
                        </div>
                        <div class="col-lg-9">
                            <form id="ajax-form-search-room" action="#" method="post">
                                <div class="availability-form">
                                    <input type="text" name="arrive" class="awe-calendar from" placeholder="Arrival Date">
                                    <input type="text" name="departure" class="awe-calendar to" placeholder="Departure Date">

                                    <select class="awe-select" name="adults">
                                        <option>Adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <select class="awe-select" name="children">
                                        <option>Children</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <div class="vailability-submit">
                                        <button class="awe-btn awe-btn-13">CHECK</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / CHECK AVAILABILITY -->


        <!-- ABOUT -->
        <section class="section-home-about bg-white">
            <div class="container">
                <div class="home-about">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img">
                                <a href="#"><img src="images/home/about/img-1.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text">
                                <h2 class="heading">ABOUT US</h2>
                                <p>Villa Marisol Deluxe is completely renovated in 2012. We welcome our guests in familiarly atmosphere. In our small community, you can relax and enjoy your vacation! We are only 280 meters away from beach, so you will not need to walk too mutch.  Cleanliness and hospitality is the Villa Marisol highest priority. Special requests can be met, we also offer tourist excursions in multiple languages.</p>
                                <a href="about.php" class="awe-btn awe-btn-default">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / ABOUT -->

        <!-- OUR BEST -->
        <section class="section-our-best bg-white">
            <div class="container">

                <div class="our-best">
                    <div class="row">

                        <div class="col-md-6 col-md-push-6">
                            <div class="img">
                                <img src="images/home/ourbest/img-1.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-6 col-md-pull-6 ">
                            <div class="text">
                                <h2 class="heading">Our Best</h2>
                                <p>One of Budva best-loved villa, Villa Marisol Deluxe is recognized as one of Budva's leading Villa with gracious montenegrian hospitality, thoughtful amenities and distinctive .</p>
                                <ul>
                                    <li>Wi-Fi</li>
                                    <li>Kingsize Bad</li>
                                    <li>Air Condition</li>
                                    <li>Modern kitchen with hood</li>
                                    <li>Cable/satellite TV channels</li>
                                    <li>Washing machine</li>
                                    <li>Parking</li>
                                    <li>Safe (strongbox)</li>
                                    <li>Flatscreen TV</li>
                                    <li>Security Lights</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- END / OUR BEST -->

        <!-- HOME GUEST BOOK -->
        <section class="section-home-guestbook awe-parallax bg-13">

            <div class="awe-overlay"></div>

            <div class="container">
                <div class="home-guestbook">

                    <div class="row">
                        <div class="col-md-3 col-lg-2 col-lg-offset-1 col-lg-push-9 col-md-push-9">
                            <div class="guestbook-header">
                                <h2 class="heading">GUEST BOOK</h2>
                                <p>Your feedback means the world to us.</p>
                                
                            </div>
                        </div>

                        <div class="col-md-9 col-lg-9 col-lg-pull-3 col-md-pull-3">
                            <div class="guestbook-content owl-single">

                                <!-- ITEM -->
                                <div class="guestbook-item">
                                    <div class="img">
                                        <img src="images/avatar/img-5.jpg" alt="">
                                    </div>

                                    <div class="text">
                                        <p>This is the only place to stay in Budva! I have stayed in the cheaper hotels and they were fine, but this is just the icing on the cake! After spending the day bike riding and hiking to come back and enjoy a glass of wine while looking out your ocean view window and then to top it all off...</p>
                                        <span><strong>Boris</strong>From Saint Petersburg, Russia</span>
                                    </div>
                                </div>
                                <div class="guestbook-item">
                                    <div class="img">
                                        <img src="images/avatar/img-3.jpg" alt="">
                                    </div>

                                    <div class="text">
                                        <p>I love the gareden, and barbecue that you have, I will definitely come back to your place ! Budva is nice city, and all the  people are on a good mood !</p>
                                        <span><strong>Anke</strong>From Mühldorf, Germany</span>
                                    </div>
                                </div>
                                <!-- ITEM -->

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- END / HOME GUEST BOOK -->


        <!-- GALLERY -->
        <section class="section-gallery bg-white">

            <div class="gallery  no-padding">
                <h2 class="heading text-center">GALLERY</h2>



                <!-- GALLERY CONTENT -->
                <div class="gallery-content">
                    <div class="row">
                        <div class="gallery-isotope col-6 pd-0">

                            <!-- ITEM SIZE -->
                                <div class="item-size"></div>
                                <!-- END / ITEM SIZE -->
                            <!-- ITEM -->

                            <div class="item-isotope suite dining ">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground bathroom suite">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom dining">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope suite dining">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope  ground suite dining">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom dining">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground suite dining">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-7.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope bathroom suite dining">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-8.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope bathroom suite dining">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-9.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-10.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom suite ">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-11.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                            <!-- ITEM -->
                            <div class="item-isotope ground bathroom">
                                <div class="gallery_item">
                                    <a  href="images/gallery/popup/img-1.jpg" class="gallery-popup mfp-image" title="Luxury Room view all">
                                        <img src="images/gallery/img-12.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- END / ITEM -->

                        </div>
                    </div>

                    <div class="our-gallery text-center">
                        <a href="gallery.php" class="awe-btn awe-btn-default">BROWSE OUR GALLERY</a>
                    </div>

                </div>
                <!-- GALLERY CONTENT -->

            </div>
        </section>
        <!-- END / GALLERY -->
        <?php
        include "includes/footer.php";
        ?>
