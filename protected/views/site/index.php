<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<section id="home">
    <div id="main-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php if(!empty($slider)) {
                foreach ($slider as $s) {
                    ?>
                    <div class="item active">
                        <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl . '/images/slider/'.$s->id.'/'.$s->image.'sld.jpg'; ?>" alt="slider">
                        <div class="carousel-caption">
                            <h2>listen our next Program </h2>
                            <h4>Antaral @7:30PM</h4>
                        </div>
                    </div>
                <?php }
            } ?>

        </div>
    </div>
</section>
<section id="explore">
    <div class="container">
        <div class="row">
            <div class="watch">
                <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/watch.png" alt="">
            </div>
            <div class="col-md-4 col-md-offset-2 col-sm-5">
                <h2>Now Playing</h2>
                <audio controls="controls">
                    <source src="<?php echo Yii::app()->request->baseUrl.'/images/AudioArchive/10/1464064753_Saware.mp3';?>" type="audio/mp3" />
                </audio>
            </div>
            <div class="col-sm-7 col-md-6">

                <ul id="countdown">
                    <li>
                        <span class="minutes time-font">00</span>
                        <p class="">minutes</p>
                    </li>
                    <li>
                        <span class="seconds time-font">00</span>
                        <p class="">seconds</p>
                    </li>
                </ul>
                <h2 style="float: right;">next program in</h2>
            </div>
        </div>
        <div class="cart">
            <a href="#"><i class="fa fa-user"></i> <span>Audience Login</span></a>
        </div>
    </div>
</section>
<section id="program">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div id="event-carousel" class="carousel slide" data-interval="false">
                    <h2 class="heading">Radio PRJ702's Programs</h2>
                    <a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/event/event1.jpg" alt="event-image">
                                        <h4>Bahakine Man</h4>
                                        <h5>Mahabir Bishwokarma, CIN Radio.</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/event/event2.jpg" alt="event-image">
                                        <h4>Bulbul</h4>
                                        <h5>Achyut Ghimire</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/event/event3.jpg" alt="event-image">
                                        <h4>Shruti Sambeg</h4>
                                        <h5>Achyut Ghimire,Ujyaalo Ninety Network</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/event/event4.jpg" alt="event-image">
                                        <h4>Ajar Amar Geetharu</h4>
                                        <h5>Prakash Sayami</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/event/event5.jpg" alt="event-image">
                                        <h4>Yo Sanjh Yo Subash</h4>
                                        <h5>Pradip Giri,Ransi Media USA.</h5>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single-event">
                                        <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/event/event6.jpg" alt="event-image">
                                        <h4>Yo Maya Bhanne Chiz Yastai Ho</h4>
                                        <h5>Sabina Karki,</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="radio">
                <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/radio.png" alt="radio">
            </div>
        </div>
    </div>
</section>
<section id="about">
    <div class="radio2">
        <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/radio2.png" alt="radio">
    </div>
    <div class="about-content">
        <h2>About  Radio PRJ702</h2>
        <p>Radio PRJ702 is a highly available customized cloud based online radio station. It is basically designed for Nepalease people who are living in different part of world; it is designed in such a way that listener can listen to this radio according to their time zone.</p>
        <a href="#" class="btn btn-primary">Know More <i class="fa fa-angle-right"></i></a>
    </div>
</section>
<section id="contact">
    <div class="contact-section">
        <div class="ear-piece">
            <img class="img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/frontendfiles/images/ear-piece.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-offset-4">
                    <div class="contact-text">
                        <h3>Contact</h3>
                        <address>
                            E-mail: <a href="mailto:musik21ocean@gmail.com"> musik21ocean@gmail.com</a><br>
                            Phone: +64 273280584<br>
                            Fax:
                        </address>
                    </div>
                    <div class="contact-address">
                        <h3>Contact</h3>
                        <address>
                            20 Derrimore Heights,  ,<br>
                            Auckland,<br>
                            New Zealand
                        </address>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div id="contact-section">
                        <h3>Send a message</h3>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email ID">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

