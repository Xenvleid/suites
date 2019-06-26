<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package suites
 */

?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Suite &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php wp_head(); ?>	
 </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar">
      
      <div class="container">
        <div class="site-navbar">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.html">Suites</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="index.html">Home</a>
                      </li>
                      <li class="has-children">
                        <a href="rooms.html">Rooms</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="rooms.html">Standard Room</a></li>
                          <li><a href="rooms.html">Family Room</a></li>
                          <li><a href="rooms.html">Single Room</a></li>
                          <li class="has-children">
                            <a href="rooms.html">Rooms</a>
                            <ul class="dropdown">
                              <li><a href="rooms.html">America</a></li>
                              <li><a href="rooms.html">Europe</a></li>
                              <li><a href="rooms.html">Asia</a></li>
                              <li><a href="rooms.html">Africa</a></li>
                              
                            </ul>
                          </li>

                        </ul>
                      </li>
                      <li><a href="events.html">Events</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="contact.html">Contact</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



