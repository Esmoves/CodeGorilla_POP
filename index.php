<!DOCTYPE html>
<html lang="nl-NL">
<!DOCTYPE html>
<html lang="nl-NL">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Portfolio Esmeralda Tijhoff">
    <meta name="keywords" content="Tijhoff, Esmeralda, A.E., werk, webdesign, teksten, webprogrammeur, groningen, freelancer, ict, vrouw, redacteur, historicus, geschiedenis, betrokken, websites, applicaties, animaties, annimaties, apps, appbouwer, telefoon, schrijver, codes, inhuren, programmeur, werk van Esmeralda Tijhoff, profiel, gegevens, contact, cv">
    <meta name="author" content="A.E.Tijhoff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./include/style.css">
    <script src="./include/javascript.js"></script>

<!-- script by Karl Swedberg for smooth navigation on a one page website -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://github.com/kswedberg/jquery-smooth-scroll/blob/master/jquery.smooth-scroll.min.js"></script>
      <script>
      $('.smooth').on('click', function() {
          $.smoothScroll({
              scrollElement: $('body'),
              scrollTarget: '#' + this.id
          });
          
          return false;
      });
    </script>

    <title>Portfolio Tijhoff</title>
  </head>
  <body>
    <div id="container">

      <!-- menu met een uitklapfunctie in CSS3 -->    
    <div class="menu-wrap">
      <nav class="menu">
        <ul class="clearfix">
          <li><a href="#home" class="knopFormulier smooth">Home</a></li>
          <li><a href="#about" class="knopFormulier smooth">About</a></li>
          <li class="dropdown"><a href="./portfolio.php" class="knopFormulier"><span class="arrow">&#9660;</span>Portfolio</a>
              <ul>
                <li><a href="./portfolio.php#pop" class="dropdownBtn">POP</a></li>
                <li><a href="./portfolio.php#apps" class="dropdownBtn">Apps</a></li>
                <li><a href="./portfolio.php#web" class="dropdownBtn">Websites</a></li>
                <li><a href="./portfolio.php#animations" class="dropdownBtn">Animations</a></li>
              </ul>
            </li>  
           <li><a href="#contact" class="knopFormulier smooth">Contact</a></li>  
        </ul>
      </nav>   
     </div>   

      <!-- pagina moet via scrollen alles laten zien 
      inhoud: intro over mij
      korte slide van portfolio, screenshot van apps S
      korte eductatie verwijzing (links naar certificaten)
      badges op pagina laten zien

           -->
        <div id="home" class="content">
          
          <h1>Esmeralda Tijhoff</h1>
          <p>
            Welcome on this webpage! The internet can be a very anonimous place, so let's dive into getting to know each other. My name is Esmeralda Tijhoff. I have created these pages to inform people about my abilities as a programmer and a designer. This website will be filled with apps and web environments that I create, just look under Portfolio. But this site is not just to inform people. In the menu, you can find the POP button. On this page, I will keep track of my goals, timescedule, needed tools and my achievements so far. If you were ever interested in knowing how a coder is born, just surf by on a regular basis to watch me grow!</p>
            <p>Besides coding, I am also active as a researcher at the University of Groningen. My field is Modern History, and I am finishing up my biography on five sisters around 1900 Amsterdam: the Boissevain sisters.</p>
            <p>
              <div class="center">
                Interested in History? Check my profile at the University of Groningen</br>
                <a href="http://www.rug.nl/staff/a.e.tijhoff" target="_blank">
                www.rug.nl/staff/a.e.tijhoff</a></p> 
                <p>I am also a blogger, so feel free to check out my personal page<br />
                <a href="http://www.esmeraldatijhoff.nl" target="_blank">www.esmeraldatijhoff.nl</a></p>
                </p>
              </div>
        </div> <!-- end div content -->
        
          <!-- moving picture in CSS3 animatie on hover-->
          <div id="esmo">
            <div class="pictureEsmo">
                <div><!-- the picture --></div>
            </div>
          </div>  
        
   
       
        <div id="about" class="content">
             <h1>Esmeralda Tijhoff</h1>
          <p>  As a child, I always wanted to be an inventor or an astronomer. I loved math. So I was a volunteer at the Cosmos Sterrenwacht Lattrop during high-school, wrote a small book about quarks and superstrings and tried to get my head around singularities in black holes. But I never made it to study mathematics. I enrolled in History instead, a study I believed would be better suited for a storyteller and writer like myself. With history, I could understand society and its inhabitants better.
         </p><p>
          But my beta-side found a way to surface again when I looked for ways to share valuable information with the world. My first website was build in HTML and includes some iframes,… It was a long, long, long time ago. It contained all the feminist articles I came across, all the activities in the Netherlands on feminism, LGTB and Womensissues, and all the address of queer, gay bars I could find. Next I build a national website for De Heksennacht, and I learned PHP with MySQL to manage all the extensive data I collected. I also mastered Photoshop to be able to make my designs. It was also very helpful to create posters, flyers and other material for my PR activities.
            </p><p>
          I build a lot more websites on the way, improving my skills with the help of my dear friend and the internet. Before I knew it, I could start a business in webdesign and programming called Fonkel, a name that hinted to the glistering of an emerald. I gave up Fonkel when I started as a PHD-student at the university. Since then, my sites are mainly build using WordPress so non-programmers can easily manage and update them. But who knows, I might start coding again. 
            </p>

        </div> <!-- end content div -->


        <div id="contact" class="content">
             <h1>Contact</h1>
              <p>Hi! </br>
                Since lots of servers don't support the Send Mail function in PHP anymore, it would be best if you just send me an email using:</p>
                <div class="center"><h3>
                  <a href="mailto:esmeraldatijhoff@gmail.com">EsmeraldaTijhoff at gmail</a></span></h3>
                </div>
                <p></br><strong><em>This form is here because it looks pretty. It won't work yet!</em></strong></p> 

              <!-- Contact formulier  -->
              <div class="formcontainer">
                <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name">
                <label for="email">Email</label>
                <input type="text" id="email" name="mail" placeholder="Your e-mail adress">      
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Your message" style="height:200px"></textarea>
                <input type="submit" value="Submit">
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