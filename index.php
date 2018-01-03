<!DOCTYPE html>
<html lang="nl-NL">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Portfolio Esmeralda Tijhoff">
    <meta name="keywords" content="Tijhoff, Esmeralda, A.E., werk, webdesign, teksten, webprogrammeur, groningen, freelancer, ict, vrouw, redacteur, historicus, geschiedenis, schrijver, auteur, betrokken, websites, applicaties, animaties, annimaties, apps, appbouwer, telefoon, schrijver, codes, inhuren, programmeur, werk van Esmeralda Tijhoff, profiel, gegevens, contact, cv">
    <meta name="author" content="A.E.Tijhoff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <link rel="stylesheet" href="./include/style.css">
    <script src="./include/javascript_snowman.js"></script>
    <!-- smooth scrolling plugin -->
    <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="./include/smooth-scroll.js"></script>

    <title>Portfolio Tijhoff</title>
  </head>
  <body>
    <div id="container">

      <!-- menu met een uitklapfunctie in CSS3 -->    
    <div class="menu-wrap">
      <nav class="menu">
        <label for="show-menu" class="show-menu">Show Menu</label>
        <input type="checkbox" id="show-menu" role="button">
        <ul class="clearfix" id="menuUl">
          <li><a href="#home" class="knopFormulier">Home</a></li>
          
          <li class="dropdown"><a href="#about" class="knopFormulier"><span class="arrow">&#9660;</span>About</a>
            <ul>
              <li><a href="#CV" class="dropAbout">CV</a></li>
              <li><a href="#POP" class="dropAbout">PDP</a>
                <ul>
                  <li><a href="#now" class="dropPOP">PDP: Status</a></li>
                  <li><a href="#goals" class="dropPOP">PDP: Goals</a></li>
                  <li><a href="#tools" class="dropPOP">PDP: Tools</a></li>
                  <li><a href="#needs" class="dropPOP">PDP: Needs</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="dropdown"><a href="#portfolio" class="knopFormulier"><span class="arrow">&#9660;</span>Portfolio</a>
              <ul>
                <li><a href="#apps" class="dropdownBtn">Apps</a></li>
                <li><a href="#web" class="dropdownBtn">Websites</a></li>
                <li><a href="#animations" class="dropdownBtn">Animations</a></li>   
              </ul>
            </li>  
           <li><a href="#contact" class="knopFormulier smooth">Contact</a></li>   

      </nav>   
     </div>   

        <div id="home" class="content">
          
          <h1>Esmeralda Tijhoff</h1>
          <p>
            Welcome on this webpage! The internet can be a very anonimous place, so let's dive into getting to know each other. My name is Esmeralda Tijhoff. I have created these pages to inform people about my abilities as a programmer and a designer. This website will be filled with apps and web environments that I create, just look under Portfolio. But this site is not just to inform people. In the menu, you can find the POP button. On this page, I will keep track of my goals, timescedule, needed tools and my achievements so far. If you were ever interested in knowing how a coder is born, just surf by on a regular basis to watch me grow!</p>
            <div class="center">
                Interested in History? Check my profile at the University of Groningen</br>
                <a href="http://www.rug.nl/staff/a.e.tijhoff" target="_blank">
                www.rug.nl/staff/a.e.tijhoff</a></p> 
                <p>I am also a blogger, so feel free to check out my personal page<br />
                <a href="http://www.esmeraldatijhoff.nl" target="_blank">www.esmeraldatijhoff.nl</a></p>
                </p>
              </div>
            <p>Besides coding, I am also active as a researcher at the University of Groningen. My field is Modern History, and I am finishing up my biography on five sisters around 1900 Amsterdam: the Boissevain sisters.</p>
            <p>
            <!-- moving picture in CSS3 animatie on hover-->
          <div id="esmo">
            <div class="pictureEsmo">
                <div><!-- the picture --></div>
            </div>
          </div>    
        </div> <!-- end div content -->
        
          
        
   
       
        <div id="about" class="content">
             <h1>Esmeralda Tijhoff</h1>
          <p>  As a child, I always wanted to be an inventor or an astronomer. I loved math. So I was a volunteer at the Cosmos Sterrenwacht Lattrop during high-school, wrote a small book about quarks and superstrings and tried to get my head around singularities in black holes. But I never made it to study mathematics. I enrolled in History instead, a study I believed would be better suited for a storyteller and writer like myself. With history, I could understand society and its inhabitants better.
         </p><p>
          But my beta-side found a way to surface again when I looked for ways to share valuable information with the world. My first website was build in HTML and includes some iframes,… It was a long, long, long time ago. It contained all the feminist articles I came across, all the activities in the Netherlands on feminism, LGTB and Womensissues, and all the address of queer, gay bars I could find. Next I build a national website for De Heksennacht, and I learned PHP with MySQL to manage all the extensive data I collected. I also mastered Photoshop to be able to make my designs. It was also very helpful to create posters, flyers and other material for my PR activities.
            </p><p>
          I build a lot more websites on the way, improving my skills with the help of my dear friend and the internet. Before I knew it, I could start a business in webdesign and development called Fonkel, a name that hinted to the glistering of an emerald. When I started as a PHD-student at the university in 2010, I had to end Fonkel. Since then, I have build my sites using WordPress so non-programmers can easily manage and update them. But who knows, I might start coding again. 
            </p>
            <div class="center">
              <img src="./images/esmeralda_cartoon.png" alt="cartoon" width="80%" />
            </div>
        </div> <!-- end content div -->

        <div id="POP" class="content">
              <h1><em>PDP: Personal Development Plan</em></h1>
              <p>This text will be used to monitor my progress in obtaining the skills of a true computer programmer. It has been written specifically for CodeGorilla, which is a project I am involved in. This POP is public, so use it to get some insights into the 
              obscure world of learning how to code.</p> 

              <h2 id="now">Where I am now</h2>
              <div class="mypop">
                <dl>
                  <dt>
                    My starting points 
                  </dt>
                  <dd class="percentage percentage-20"><span class="text">HTML5</span></dd>
                  <dd class="percentage percentage-15"><span class="text">CSS3</span></dd>
                  <dd class="percentage percentage-1"><span class="text">Javascript</span></dd>
                  <dd class="percentage percentage-5"><span class="text">PHP</span></dd>
                  <dd class="percentage percentage-1"><span class="text">Git/Github</span></dd>
                  <dd><span style="padding-left: 140px;">Skills from Basic to Pro</span></dd>
                </dl>
              </div> 
              
              <p>In December 2017, I started with a month of homestudy to gain the basic knowledge of programming with HTML5, CSS3 and Javascript. To be fair, I already knew the basics of HTML4 and CSS2 so these two were easy for me to reacquaint myself with. Since I had not been active as a coder since 2010, I had a lot to catch up with. I updated my knowledge using Sololearn and <a href="https://www.khanacademy.org/profile/Esmoves/" target="_blank">Khanacademy</a> and ofcourse W3school.
              </p><p>Javascript was totally new to me, so I had to dive into it the hard way. I started with Sololearn, but still didn't feel like I had any idea about JS after finishing the course. So I took up <a href="https://www.khanacademy.org/profile/Esmoves/" target="_blank">Khanacademy</a>, Intro to JS: Drawing & Animation. And after I finished that one, I also entered the course HTML/JS: Making webpages interactive.</p>
              
              <p>As you can see in the chart for 5 Januari 2018, I have obtained the basic level for Javascript and I am working on a advanced level for HTML5 and CSS3. I have also started with GitHub. My work in PHP will take off shortly.
              </p>

              <div class="mypop">
                <dl>
                  <dt>
                    My progress dd 5th Januari 2018
                  </dt>
                  <dd class="percentage percentage-50"><span class="text">HTML5</span></dd>
                  <dd class="percentage percentage-55"><span class="text">CSS3</span></dd>
                  <dd class="percentage percentage-25"><span class="text">Javascript</span></dd>
                  <dd class="percentage percentage-1"><span class="text">PHP</span></dd>
                  <dd class="percentage percentage-5"><span class="text">Git/Github</span></dd>
                </dl>
              </div> 

              <h3>To sum up, I am a coder</h3>
              <p>I can understand other peoples codes, rearrange them and implement them in my own pages. I am able to write my own webpages in HTML5 and CSS3. I am also capable of reading and understanding Javascript and implementing scripts in my own work. I have made a modest start in writing my own JS scripts. My biggest challange is to master what is actually happening with these codes. If I can understand this, I can be a programmer!</p> 

              <div class="center">
              <a href="https://www.khanacademy.org/profile/Esmoves/" target="_blank"><img src="./images/khanacademy.png" alt="badges from Khanacademy" width="250px" /></a>
              </div>

              <div class="center">
                <a href="./images/HTML_certificate.jpg" target="_blank"><img src="./images/HTML_certificate.jpg" alt="certificate for HTML5 from Sololearn" width="150px" /></a>
                <a href="./images/JS_certificate.jpg" target="_blank"><img src="./images/JS_certificate.jpg" alt="certificate for Javascript from Sololearn" width="150px" /></a>
                <a href="./images/css_certificate.jpg" target="_blank"><img src="./images/css_certificate.jpg" alt="certificate for CSS3 from Sololearn" width="150px" /></a>
              </div>



              <h2 id="goals">My goals</h2>
              <p>
              At the moment, I function at the level of a coder. This means I can write basic codes and interpret codes other peoples and implement them in my own pages. But I wish to fully understand the programlaguages. I want to gain proficiency at a professional level of the programming languages ​​HTML5, CSS3, Javascript and PHP. And, if it fits in the timescedule: C and C++.
              </p>

              <div class="mypop">
                <dl>
                  <dt>
                    My Goals 
                  </dt>
                  <dd class="percentage percentage-100"><span class="text">HTML5</span></dd>
                  <dd class="percentage percentage-90"><span class="text">CSS3</span></dd>
                  <dd class="percentage percentage-80"><span class="text">Javascript</span></dd>
                  <dd class="percentage percentage-80"><span class="text">PHP</span></dd>
                  <dd class="percentage percentage-90"><span class="text">Git/Github</span></dd>
                  <dd><span style="padding-left: 140px;">Skills from Basic to Pro</span></dd>
                </dl>
              </div> 


              <h2 id="tools">My tools</h2>
              <p>
              To get working on my goals, I will be using</p>
               
                <ul class="regular">
                  <li><a href="http://www.sololear.com" target="_blank">
                    Sololearn </a></li>
                  <li><a href="http://www.khanacademy.com" target="_blank">Khanacademy</a></li>
                  <li><a href="http://www.codeacademy.com" target="_blank">CodeAcademy</a></li>
                  <li><a href="http://www.codegorilla.nl" target="_blank">Personal guidence from CodeGorilla</a></li>
                  <li>Studygroup</li>
                </ul>
                
              <p>I will gain experience and knowledge by simply starting to build stuff. My projects include:</p>
              <div class="checklist">
                  <div class="list check">creating a greeting in the form of an animation</div>
                  <div class="list check">building a responsive website for my online presentation. <br />This should include:</div>
                      <div class="list check inner">a fixed dropdown menu</div>
                      <div class="list check inner">smooth scrolling</div>
                      <div class="list check inner">responsive width for small devices</div>
                      <div class="list check inner">a funny animation in CSS3</div>
                      <div class="list check inner">a working contactform with validation and alerts in PHP and Javascripts</div>
                      <div class="list uncheck">a portfolio page with pop ups for the Javascript animations</div> 
                  <div class="list check">developing an adressbook in Javascript</div>
                  <div class="list uncheck">transforming this adressbook into an app for android or Iphone</div>
                  <div class="list uncheck">participating in a Hackaton</div>  
                  <div class="list uncheck">building a small game in Javascript</div>  
              </div> 


              
              <h2 id="planning">My planning</h2>
              <p>It is always difficult to attach a timeframe to gainig skills and experience. But in this case I can work within a set timeframe since CodeGorilla offers a three months training in Javascript and PHP. </p>
              <p>As you can see in the scedule below, I anticipate to be on a 'pro' level for HTML5 and CSS3 far sooner than for Javascript and PHP. This is logical since I started as a noob in Javascript and the training in PHP starts at a later date.
              </p>
              <div class="graph_stacked">
                  <div class="col">
                    <div class="bar"></div>
                    <div class="bar"><p>HTML5</p>
                      <div class="seg top" style="height: 50px;"><p><strong>pro</strong><br /><em>1/3/2018</em></p></div>
                      <div class="seg middle" style="height: 40px;"><p><strong>advanced</strong> <br /><em>1/2/2018</em></p></div>
                      <div class="seg" style="height: 30px;"><p><strong>basic</strong><br /><em>1/12/2017</em></p></div>
                    </div>

                     <div class="bar"><p>CSS3</p>
                      <div class="seg top" style="height: 50px;"><p><strong>pro</strong> <br />1/3/2018</p></div>
                      <div class="seg middle" style="height: 35px;"><p><strong>advanced</strong> <br /><em>1/2/2018</em></p></div>
                      <div class="seg" style="height: 35px;"><p><strong>basic</strong><br /><em>1/12/2017</em></p></div>
                    </div>

                    <div class="bar"><p>Javascript</p>
                      <div class="seg top" style="height: 55px;"><p><strong>pro</strong>
                        <br /><em>12/4/2018</em></p></div>
                      <div class="seg middle" style="height: 60px;"><p><strong>advanced</strong><br /><em>1/3/2018</em></p></div>
                      <div class="seg" style="height: 55px;"><p><strong>basic</strong><br /><em>1/1/2017</em></p></div>
                    </div>

                    <div class="bar"><p>PHP</p>
                      <div class="seg top" style="height: 60px;"><p><strong>pro</strong><br /><em>1/5/2018</em></p></div>
                      <div class="seg middle" style="height: 95px;"><p><strong>advanced</strong><br /><em>15/3/2018</em></p></div>
                      <div class="seg" style="height: 35px;"><p><strong>basic</strong><br />1/12/2017</p></div>
                    </div>

                    <div class="bar"><p>Git/Github</p>
                      <div class="seg top" style="height: 40px;"><p><strong>pro</strong><br /><em>1/4/2018</em></p></div>
                      <div class="seg middle" style="height: 50px;"><p><strong>advanced</strong><br /><em>1/3/2018</em></p></div>
                      <div class="seg" style="height: 65px;"><p><strong>basic</strong><br /><em>6/1/2017</em></p></div>
                    </div>

                  </div>
                </div>

 
                <h2 id="needs">My needs</h2>
                <p>
                In order to learn effecient, I need a coach and a wizard who can help me trouble shoot my codes. I also need somebody who can regularly explain why codes work like they do.</p>
                <p>CodeGorilla will be able to profide for these needs.</p>



        </div> <!-- end content div -->      



        <div id="CV" class="content">
            <h1>CV</h1>
            
            <div class="center">
              <a href="./images/CV_Tijhoff.jpg" target="_blank" class="clearlink">
                <img src="./images/CV_Tijhoff.jpg" alt="CV of Esmeralda Tijhoff" width="80%" />
              </a>
            </div>
        </div> <!-- end content div -->    


    <div class="content">

      <!-- Social media buttons from the left -->
      
      <h1 id="portfolio">Portfolio</h1>
      <p>A portfolio might be the first thing you would click on in a website. After all, it tells you in one glimps what kind of person you are dealing with and what they are capable of. So I hope you will find what you are looking for here, but don't forget to check out the other pages of this website too!</p>
      <p>What do I have to show for so far? I have some old websites for you to inspect, a beautiful adressbook in Javascript and a animated snowman in Javascript.</p>
      <p>Ofcourse I will contineu to fill this page with lots of work. So check in once in a while to see whats going on.
      </p>
      <p>Check out my portfolio:</p>
      <ul style="list-style: none">
        <li><a href="#apps" class="knopFormulier" style="display: inline-block; margin-bottom: 10px;">Apps</a></li>
        <li><a href="#web" class="knopFormulier" style="display: inline-block; margin-bottom: 10px;">Websites</a></li>
        <li><a href="#animations" class="knopFormulier" style="display: inline-block; margin-bottom: 10px;">Animations</a></li>
      </ul>

      </div>

      <div id="apps" class="content">
          <h1>Apps</h1>
      
          <p>
          Here I will show the apps I will create!</p>

          <h2>Adressbook in Javascript</h2>
          <p>
           This adressbook gives you the oppertunity to keep track off all your contacts. The adressbook is build using Javascript, and the contacts are stored in you localhost. The pages are all written in one file and hidden by default. You make the pages visible by clicking on the appropriete link, chaning the display of the corresponding page to visible.</p>
           <p>The app will be further develloped so you can also keep track of the mails you have send them. The app will feature a checklist function so you can choose which contacts you need to send a card for a special occasion, like an invitation or a christmascard.
         </p>
         
          <div class="portfolio_show_items">
            <a href="./portfolio_items/adressbookJS/index.php" target="_blank" class="cleanlink imgonhover">
              <img src="./images/adressbook_contacts.png" alt="The overview page of all contacts in the adressbook developed by Tijhoff." width="150px"  />
               <div class="popup">
                    <img src="./images/adressbook_contacts.png" alt="The overview page of all contacts in the adressbook developed by Tijhoff." width="400px" class="figure" />
               </div>
            </a>  
          </div>  
          <div class="portfolio_show_items">  
            <a href="./portfolio_items/adressbookJS/index.php" target="_blank" class="cleanlink imgonhover">
              <img src="./images/adressbook_form.png" alt="The form to upload a new contact in the adressbook developed by Tijhoff." width="150px" />
              <div class="popup">
                    <img src="./images/adressbook_form.png" alt="The form to upload a new contact in the adressbook developed by Tijhoff." width="400px" class="figure" />
              </div>
            </a> 
          </div>   
          <div class="portfolio_show_items">   
            <a href="./portfolio_items/adressbookJS/index.php" target="_blank" class="cleanlink imgonhover">
              <img src="./images/adressbook_page.png" alt="The adressbook has a sidemenu that pops up at hover. Here you see the tutorial of the adressbook." width="150px" />
              <div class="popup last">
                    <img src="./images/adressbook_page.png" alt="The adressbook has a sidemenu that pops up at hover. Here you see the tutorial of the adressbook." width="400px" class="figure" />
              </div>
            </a>
          </div>

         <h2>Upcoming: Puzzle for special need todlers</h2>
          <p>My next project will be a small game for todlers. My own two four-year olds love to puzzle, so I will build a puzzle app using high contrast pictures suitable for children with bad vision, colour blindness, high sencitivity and autism.</p>
          <p>I tend to make this app available in the appstores.</p>  
          <div class="center">
            <img src="./images/puzzel.png" alt="Puzzel app upcoming" width="200px" />
          </div>

        </div> <!-- end content div -->

       <div id="web" class="content">
          <h1>Websites</h1>
          <p>Here I will show screenshots of webpages I designed and/or build.</p>

          <h2>Personal Blog, build with Wordpress</h2>
          <div class="center">  
            <a href="http://www.esmeraldatijhoff.nl" target="_blank" class="clearlink">
              <img src="./images/webesmeralda.png" alt="screenshot of the blog" width="80%" />
            </a>
          </div>

          <h2>Kristallnachtherdenking</h2>
          <p>This simple website was build ages ago. It is still functional but the design and codes haven't been updated.</p>
          <div class="center">  
            <a href="http://www.kristallnachtherdenking.nl" target="_blank" class="clearlink">
              <img src="./images/kristallnacht.png" alt="screenshot of the website of the kristallnacht herdenking" width="80%" />
            </a>
          </div>
          
         <h2>Heksennacht / Reclaim the Night</h2>
         <p>This is actually one of the first websites I have build, it is over 10 years old. It has not been updated in content or codes for the last years.</p>
         <div class="center">  
            <a href="http://www.esmeraldatijhoff.nl/heksennacht/index.php" target="_blank" class="clearlink">
              <img src="./images/heksennacht.png" alt="screenshot of the website of the heksennacht also known as Reclaim the Night" width="80%" />
            </a>
          </div>


      </div>

    

  
  <div id="animations" class="content">
      
      <h1>Animations</h1>
 
          <p>Check these animations.</p>

       <h2>The Snowman!</h2>
       <p>This lovely snowman is drawn in Javascript. In the animation, the stars in the background move to the right, and reappear once all stars have left the canvas.</p> 
          <div class="portfolio_show_items">   
              <a href="./portfolio_items/snowmanAnimatie.php" target="_blank" class="cleanlink imgonhover">
                <img src="./images/sneeuwman.png" alt="A snowman drawn in Javascript with a moving star background." width="80%" />
                <div class="popup">
                      <div id="animatie">
                        <canvas id="snowman" width="900" height="410"> </canvas> <!-- voor de sneeuwman -->
                     </div>
                </div>
               </a>
          </div>

    </div> <!-- end content div -->







        <div id="contact" class="content">
             <h1>Contact</h1>
              <p>Hi! </br>
                Use this form to send me a message, or decipher and copy my e-mail adress so you can use your own e-mail sevice.</p>
                <p>I would love to hear from you!</p>
                <div class="center"><p> 
                  <a href="mailto:esmeraldatijhoff@yahoo.com">EsmeraldaTijhoff at yahoo dot com</a></p>
                </div>

              <!-- Contact formulier  -->
              <div class="formcontainer">
                <form name="contactform" enctype="multipart/form-data" method="post" action="./include/sendMail.php">
                  <label for="firstname">First Name</label>
                  <input type="text" id="firstname" name="firstname" placeholder="Your first name"/>
                  <label for="lastname">Last Name</label>
                  <input type="text" id="lastname" name="lastname" placeholder="Your last name"/>
                  <label for="email">E-mail adress</label>
                  <input type="text" id="email" name="email" placeholder="Your e-mail adress"/>      
                  <label for="message">Your message</label>
                  <textarea id="message" name="message" placeholder="Your message" style="height:200px;"></textarea>
                  <input type="submit" name="submit" value="submit">
                </form>
              </div>

          </div> <!-- end content div -->


      <!-- footer -->
      <div class="footer">
        <p>Design and text by Esmeralda Tijhoff<br/>
          <a href="http://www.esmeraldatijhoff.nl" target="_blank">www.esmeraldatijhoff.nl</a></p>
      </div>
   </div> <!-- end container -->

  </body>
  </html>