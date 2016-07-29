<?php
$page = "Contact";
include "includes/header.php";
?>

        <!-- SUB BANNER -->
        <section class="section-sub-banner awe-parallax bg-9">
            <div class="awe-overlay"></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                      &nbsp;
                    </div>
                </div>

            </div>

        </section>
        <!-- END / SUB BANNER -->

        <!-- CONTACT -->
        <section class="section-contact">
            <div class="container">
                <div class="contact">
                    <div class="row">

                        <div class="col-md-6 col-lg-5">

                            <div class="text">
                                <h2>Contact</h2>
                                <p>Want to get in tocuh with us ? Send us a mail, phone or send message via this form.</p>
                                <ul>
                                    <li><i class="icon hillter-icon-location"></i> Zrtava Fasizma 136, 85310 Budva, Montenegro</li>
                                    <li><i class="icon hillter-icon-phone"></i> +38268303375</li>
                                    <li><i class="icon fa fa-envelope-o"></i> office@villa-marisol.me</li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-6 col-lg-6 col-lg-offset-1">
                            <div class="contact-form">
                                <form id="send-contact-form" action="send.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text"  name="name" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="field-text" name="subject" placeholder="Subject">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea cols="30" rows="10" name="message"  class="field-textarea" placeholder="Write what do you want"></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="awe-btn awe-btn-13">SEND</button>
                                        </div>
                                    </div>
                                    <div id="contact-content"></div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END / CONTACT -->

        <!-- MAP -->
        <section class="section-map">
            <div class="contact-map">
                <div id="map" data-locations="39.0926986,-94.5747324--39.0912284,-94.5743515" data-center="39.0926986,-94.5747324"></div>
            </div>
        </section>
        <!-- END / MAP -->
        <?php include "includes/footer.php"; ?>
