@extends('layout.default')
@section('title','Pente Consultancy')
@section('main-content')
<div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preloader -->

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">


            <!-- title page -->
            <section class="flat-title-page parallax parallax-9 contact-page-title">
                <div class="container-fluid">
                    <div class="row">
                        <div class="breadcrumbs">
                            <h2 class="section-title-page">Get in Touch</h2>
                            <div class="breadcrumb-trail link-style-2">
                                <a class="home" href="/">Home</a><span>Contact Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- flat contact -->
            <section class="tf-space flat-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-title link-style-2">
                                <h3 class="section-heading">Let's Talk</h3>
                                <div class="features-content-left">
                                    <h2>Speak With Our<br>
                                        Consulti</h2>
                                </div>
                                <div class="contact-icon-box wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon meta-address"></div>
                                    <div class="content">
                                        <h4>“The Annexe”, No. 23B, C. R. Sunderam Brothers’ Layout, (Off) Trichy Road, Ramanathapuram, Coimbatore – 641045.</h4>
                                    </div>
                                </div>
                                <div class="contact-icon-box wow fadeInUp" data-wow-delay="300ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon meta-mail"></div>
                                    <div class="content">
                                        <a href="mailto:penteconsultancy@gmail.com">
                                            <h4>penteconsultancy@gmail.com</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="contact-icon-box wow fadeInUp" data-wow-delay="600ms"
                                    data-wow-duration="1500ms">
                                    <div class="icon meta-phone"></div>
                                    <div class="content">
                                        <a href="tel:012345678">
                                            <h4>+91 422 497 2850</h4>
                                        </a>
                                        <a href="tel:012345678">
                                            <h4>+91 805 668 5222</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="title">
                                <h3>Don’t Hesitate<br>
                                    To Send Your Message To Us</h3>
                            </div>
                            <div class="contact-form wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                                id="comments">
                                <form method="post" id="contactform" class="comment-form form-submit"
                                    action="./contact/contact-process.php" accept-charset="utf-8"
                                    novalidate="novalidate">
                                    <div class="text-wrap clearfix">
                                        <fieldset class="name-wrap">
                                            <input type="text" id="name" class="tb-my-input" name="name" tabindex="1"
                                                placeholder="Name*" value="" size="32" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="email-wrap">
                                            <input type="email" id="email" class="tb-my-input" name="email" tabindex="2"
                                                placeholder="Email*" value="" size="32" aria-required="true"
                                                required="">
                                        </fieldset>
                                    </div>
                                    <fieldset class="message-wrap">
                                        <textarea id="comment-message" name="message" rows="13" tabindex="4"
                                            placeholder="write your comment" aria-required="true"></textarea>
                                    </fieldset>
                                    <button name="submit" type="submit" id="comment-reply"
                                        class="button btn-style4 btn-submit-comment">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /flat contact -->

            <!-- map -->
            <div class="tf-map">
                <div class="container-fluid">
                    <div class="row">
                        <div class="inner">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7302.453092836291!2d90.47477022812872!3d23.77494577893369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1627293157601!5m2!1svi!2s"
                                class="map-contact" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
@endsection


                                