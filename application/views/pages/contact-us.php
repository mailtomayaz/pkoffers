<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
 <!-- section contact -->
  <section id="contact" class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="heading">
            <h3><span>Get in touch</span></h3>
          </div>
          <div class="sub-heading">
            <p>
              Lorem ipsum dolor sit amet, mutat paulo simul per no, assum fastidii vituperata eam no.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4><i class="icon-envelope"></i><strong>Contact form</strong></h4>
          <p>
            Want to work with us or just want to say hello? Don't hesitate to get in touch!
          </p>
          <!-- start contact form -->
          <div class="cform" id="contact-form">


            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

              <div class="text-center"><button type="submit" class="btn btn-lg btn-theme">Send Message</button></div>
            </form>
          </div>
          <!-- END contact form -->
        </div>
        <div class="col-md-6">
          <h4>Find our location</h4>
          <p>View from google map</p>
          <!-- map -->
          <div id="section-map" class="clearfix">
            <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
          </div>
        </div>
      </div>
    </div>
  </section>