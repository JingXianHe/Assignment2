/**
Website name:JQuery Mobile Web

Name       : JingXian He 
Description: A responsive website for tablet and smart phone. As the number of website visitors grows, JQuery is becoming important. So I used JQuery Mobile to build this website. 
             This is a website describes the basic information of the company,summarizing	what I	did. My	mission	statement	includes reasons	
             for	doing	this website.
Version    : 1.0
Released   : 20131025
File Name  :JavaScript.js



*/



           $(document).on('pageinit', function () {

               $("#slider").on('swipeleft', '#sliderImg', function (event, ui) {
                   if ($("#sliderImg").attr("src") == "images/project1.png")
                   {
                       $("#sliderImg").attr("src", "images/project2.png");
                       $("#imgIndex").attr("href", "https://github.com/JingXianHe/Tempeture-Station");
                   }
                   else if ($("#sliderImg").attr("src") == "images/project2.png")
                   {
                       $("#sliderImg").attr("src", "images/project3.png");
                       $("#imgIndex").attr("href", "http://webdesign4.georgianc.on.ca/~200238257/comp1006/profile/default.php?id=18");
                   }
                   else if ($("#sliderImg").attr("src") == "images/project3.png")
                   {
                       $("#sliderImg").attr("src", "images/project1.png");
                       $("#imgIndex").attr("href", "http://webdesign4.georgianc.on.ca/~200238257/comp1006/profile/default.php");
                   }

               }); 
               $("#slider").on('swiperight', '#sliderImg', function (event, ui) {
                   if ($("#sliderImg").attr("src") == "images/project1.png")
                   {
                       $("#sliderImg").attr("src", "images/project3.png");
                       $("#imgIndex").attr("href", "http://webdesign4.georgianc.on.ca/~200238257/comp1006/profile/default.php");
                   }
                   else if ($("#sliderImg").attr("src") == "images/project2.png")
                   {
                       $("#sliderImg").attr("src", "images/project1.png");
                       $("#imgIndex").attr("href", "http://webdesign4.georgianc.on.ca/~200238257/comp1006/profile/default.php");
                   }
                   else if ($("#sliderImg").attr("src") == "images/project3.png")
                   {
                       $("#sliderImg").attr("src", "images/project2.png");
                       $("#imgIndex").attr("href", "https://github.com/JingXianHe/Tempeture-Station");
                   }
               });
               $("#slider").on('tap', '#leftButton', function (event, ui) {
                   if ($("#sliderImg").attr("src") == "images/project1.png")
                   {
                       $("#sliderImg").attr("src", "images/project3.png");
                       $("#imgIndex").attr("href", "http://webdesign4.georgianc.on.ca/~200238257/comp1006/profile/default.php?id=18");
                   }
                   else if ($("#sliderImg").attr("src") == "images/project2.png")
                   {
                       $("#sliderImg").attr("src", "images/project1.png");
                       $("#imgIndex").attr("href", "http://webdesign4.georgianc.on.ca/~200238257/comp1006/profile/default.php");
                   }
                   else if ($("#sliderImg").attr("src") == "images/project3.png")
                   {
                       $("#sliderImg").attr("src", "images/project2.png");
                       $("#imgIndex").attr("href", "https://github.com/JingXianHe/Tempeture-Station");
                   }
               });
               $("#slider").on('tap', '#rightButton', function (event, ui) {
                   if ($("#sliderImg").attr("src") == "images/project1.png")
                   { $("#sliderImg").attr("src", "images/project2.png"); $("#imgIndex").attr("href", "https://github.com/JingXianHe/Tempeture-Station"); }
                   else if ($("#sliderImg").attr("src") == "images/project2.png")
                   { $("#sliderImg").attr("src", "images/project3.png"); $("#imgIndex").attr("href", "http://webdesign4.georgianc.on.ca/~200238257/comp1006/profile/default.php?id=18"); }
                   else if ($("#sliderImg").attr("src") == "images/project3.png")
                   { $("#sliderImg").attr("src", "images/project1.png"); $("#imgIndex").attr("href", "http://webdesign4.georgianc.on.ca/~200238257/comp1006/profile/default.php"); }
               });

			 
           });