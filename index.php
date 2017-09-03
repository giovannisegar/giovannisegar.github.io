<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Giovanni Segar | Marketing Professional and Public Speaker</title>

  <!-- Bootstrap -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

      <link rel="stylesheet" href="css/style.css">
      <link href="http://fonts.googleapis.com/css?family=Fjalla+One|Cantarell:400,400italic,700italic,700" rel="stylesheet" type="text/css" />


    </head>


    

    <body>



      <div class="navbar navbar-default navbar-fixed-top" data-offset-top="50">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand">Giovanni Segar</a>
            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-right navbar-nav">
              <li>
                <a href="https://www.linkedin.com/in/giovannisegar/" target="_blank">LinkedIn</a>
              </li>
              <li><a href="https://giovannisegar.com/blog">Blog</a></li>
              <li><a href="#" onclick="scrollToDiv(contactme);return false;" >Contact Me</a></li>
            </ul>
          </div>    
        </div>
      </div><!-- /.navbar -->

      
      <div class="jumbotron hero">
        <div class="container"> 
          <div class="row row-grid fixed">
            <div class="col-lg-7 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 text-center" id="header-text">
              <h1>Hi, I'm Giovanni.</h1>
              <h3>I'm a Marketing Professional and Public Speaking Coach</h3>
              <div class="btn-toolbar text-center" role="group" id="header-buttons">
                <a href="#" onclick="scrollToDiv(marketing);return false;" class="btn btn-lg btn-primary" id="primarycta">Marketing</a>
                <a href="#" onclick="scrollToDiv(publicspeaking);return false;" class="btn btn-lg btn-warning" id="secondarycta">Public Speaking</a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="col-lg-5 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-8 col-xs-offset-2 gio-image">
      </div>

      <div class="container" id="scrollover">

        <div class="row" id="marketing">
          <div class="col-lg-10 col-lg-offset-1 text-center"><h1 class="bodyh1">Marketing</h1></div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 text-center tripleicon">
            <div data-toggle="collapse" data-target="#emailcollapse" class="collapse-button-mk">
              <span class="glyphicon glyphicon-envelope"></span>
              <h3>Email Marketing</h3>
              <div class="textcollapsediv">
                <p class="collapse text-left textcollapse" id="emailcollapse">- 2 years of experience at Faithlife<br>- A/B testing for over 5x improvement<br>- Experience with multiple email platforms</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 text-center tripleicon">
            <div data-toggle="collapse" data-target="#contentcollapse" class="collapse-button-mk">
              <span class="glyphicon glyphicon-pencil"></span>
              <h3>Content Creation</h3>
              <div class="textcollapsediv">
                <p class="collapse text-left textcollapse" id="contentcollapse">I've written over 60 high-quality articles for my side business, Potent Speaking. I've also written many articles on marketing for clients or my own LinkedIn.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 text-center tripleicon">
            <div data-toggle="collapse" data-target="#appcollapse" class="collapse-button-mk">
              <span class="glyphicon glyphicon-phone"></span>
              <h3>App Marketing</h3>
              <div class="textcollapsediv">
                <p class="collapse text-left textcollapse" id="appcollapse">I'm the Mobile Marketing Manager at Faithlife. I am currently working on a mobile app relaunch campaign to increase our active user base by 10% or more.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 text-center">
            <button type="button" class="btn btn-xlg btn-primary" data-toggle="modal" data-target="#marketing-projects" id="marketingmodalbutton">See marketing projects</button>
          </div>
        </div>



        <div class="row" id="publicspeaking">
          <div class="col-lg-10 col-lg-offset-1 text-center"><h1 class="bodyh1">Public Speaking</h1></div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 text-center tripleicon">
            <div data-toggle="collapse" data-target="#awardscollapse" class="collapse-button-ps">
              <span class="glyphicon glyphicon-star"></span>
              <h3>Awards</h3>
              <div class="textcollapsediv">
                <p class="collapse text-left textcollapse" id="awardscollapse">I have several speaking awards from the NCFCA, a speech and debate organization.
                  <br><br>- Fourth place speaker, national championship
                  <br>- First place persuasive speech x6 at various tournaments
                  <br>- Third place team, regional championship
                  <br>- Top ten speaker x5 at various tournaments</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 text-center tripleicon">
              <div data-toggle="collapse" data-target="#coachingcollapse" class="collapse-button-ps">
                <span class="glyphicon glyphicon-user"></span>
                <h3>Coaching Experience</h3>
                <div class="textcollapsediv">
                  <p class="collapse text-left textcollapse" id="coachingcollapse">I run a public speaking coaching business called Potent Speaking. I've coached several clients and helped debate teams receive top awards.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 text-center tripleicon">
              <div data-toggle="collapse" data-target="#toastmasterscollapse" class="collapse-button-ps">
                <span class="glyphicon glyphicon-education"></span>
                <h3>Toastmasters Member</h3>
                <div class="textcollapsediv">
                  <p class="collapse text-left textcollapse" id="toastmasterscollapse">I'm an active member of Toastmasters International. I have received several club awards for speaking and I'm working on the first level of certification.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 text-center">
              <a href="https://potentspeaking.com/?utm_source=web&utm_medium=referral&utm_campaign=general&utm_content=giovannisegarpage" class="btn btn-xlg btn-warning" id="publicspeakingbutton">Public speaking site</a>
            </div>
          </div>

          <div class="row" id="contactme">
            <div class="col-lg-10 col-lg-offset-1 text-center"><h1 class="bodyh1">Contact Me</h1></div>
          </div>

          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <form id="contact-form" class="form-horizontal" method="post" action="contactform.php" role="form">

                <div class="messages"></div>

                <div class="controls">


                  <div class="form-group">
                    <label for="form_name" class="col-sm-2 control-label">Name*</label>
                    <div class="col-sm-10">
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Your name" required="required" data-error="Firstname is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="form_email" class="col-sm-2 control-label">Email*</label>
                    <div class="col-sm-10">
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Your email" required="required" data-error="Valid email is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>

                  
                  <div class="form-group">
                    <label for="form_message" class="col-sm-2 control-label">Message*</label>
                    <div class="col-sm-10">
                      <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>

                <div class="col-sm-10 col-sm-offset-2">
                  <input type="submit" class="btn btn-lg btn-primary btn-send" style="margin-left:-10px;" value="Send message">

                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-muted" style="margin-left:-10px;"><strong>*</strong> These fields are required.</p>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </div>




        </div> <!-- End container for marketing and public speaking skills -->



        


        <!-- Marketing projects modal -->
        <div class="modal fade right" id="marketing-projects" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Marketing projects</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="container col-md-12 modal-images">
                    <div class="col-md-4">
                      <img src="images/grandprizenovasolar.jpg" width="100%">
                      <h3>Marketing director for Nova Solar Glazing</h3>
                      <p>I helped develop the message and pitch for a product innovation competition, and we won the grand prize. I also created <a href="https://novasolarglazing.com" target="_blank">novasolarglazing.com</a> for the team.</p>
                    </div>
                    <div class="col-md-4">
                      <img src="images/fasttrackcommunication.png" width="100%">
                      <h3>Website for Fast Track Communication</h3>
                      <p>The client had a website built over a decade ago, so I created an entirely new website based on Wordpress to improve her web presence.</p>
                    </div>
                    <div class="col-md-4">
                      <img src="images/fairhavenanalytics.png" width="100%">
                      <h3>Google Analytics report for Fairhaven.com</h3>
                      <p>I helped the owner of the website understand his analytics and recommended the best course of action moving forward. I volunteered for this project in college.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- End marketing project modal -->



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script language="javascript">
          function scrollToDiv(element){
            $('html,body').unbind().animate({scrollTop: $(element).offset().top-50},'slow');
          };
        </script>






      </body>
      </html>