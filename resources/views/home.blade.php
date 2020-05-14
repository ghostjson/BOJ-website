<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>


<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <title>Monaptor</title>
    <link rel="icon" href="/assets/urlbox.png" type="image/gif">
    @include('layout.ad-blocker-detect')
</head>
<style>
    body{
    padding: 0%;
    margin: 0%;
    background-color: #0f0f0f;
    height:1px;
}
.landing{
    width: 100%;
    height: auto;
    margin-top: 60px;
    z-index: -1;
}
.landing_video{
    width: 100%;
    height: auto;
    z-index:-1;
    margin-top:-200px;
}
.content_area{
    width: 80%;
    height: auto;
    padding-top: 100px;
    padding-bottom: 100px;
    margin-left: 10%;
    background-color: #0f0f0f;
    position: relative;
    z-index: -1;
}
.task_title{
    font-size: 50px;
    text-align: center;
    color: lightgray;
}
/*--------------For Advance Designing--------------*/

.welcome_title{
    font-size: 20px;
    color: lightgrey;
    text-align: center;
    padding-bottom: 50px;
}
.mission_sections{
    width: 100%;
    min-height: 300px;
    max-height: auto;
    padding-top: 20px;
    background-color: #0f0f0f;
}

/*--------------------For Section--------------------*/

.Video_section{
    width: 25%;
    height: auto;
    position: absolute;
    border: none;
}

.App_Section{
    width: 25%;
    height: auto;
    position: absolute;
    margin-left: 25%;
}
.Site_Section{
    width: 25%;
    height: auto;
    position: absolute;
    margin-left: 50%;
}
.Verification_Section{
    width: 25%;
    height: auto;
    position: absolute;
    margin-left: 75%;
}


   /*--------------------For Titles Of Boxes--------------*/

   .video1{
    font-size: 35px; 
    color: #feca57;
    z-index:-1;
    width:80%;
    margin-left: 10%;
    display: block;
    padding-bottom: 5px;
    text-align:center;
}
.app1{
    font-size: 35px;
    color: #ee5253;
    z-index:-1;
    width:80%;
    margin-left: 10%;
    display: block;
    padding-bottom: 5px;
    text-align:center;
}
.site1{
    font-size: 35px;
    color: #0abde3;
    z-index:-1;
    width:80%;
    margin-left: 10%;
    display: block;
    padding-bottom: 5px;
    text-align:center;
}
.verify1{
    font-size: 35px;
    color:#10ac84;
    z-index:-1;
    width:80%;
    margin-left: 10%;
    display: block;
    padding-bottom: 5px;
    text-align:center;
}

/*----------For Designing Headlines of Boxes----------*/

.yellow{
    width: 80%;
    margin-left: 10%;
    height: 10px;
    background-color: #feca57;
    box-shadow: 0 0 100px #feca57;
    position: absolute;
    border:2px solid #feca57;
}
.red{
    width: 80%;
    margin-left: 10%;
    height: 10px;
    background-color: #ee5253;
    box-shadow: 0 0 100px #ee5253;
    position: absolute;
    border:2px solid #ee5253;
}
.blue{
    width: 80%;
    margin-left: 10%;
    height: 10px;
    background-color: #0abde3;
    box-shadow: 0 0 100px #0abde3;
    position: absolute;
    border:2px solid #0abde3;
}
.green{
    width: 80%;
    margin-left: 10%;
    height: 10px;
    background-color: #10ac84;
    box-shadow: 0 0 100px #10ac84;
    position: absolute;
    border:2px solid #10ac84;
}

/*----------For Designing Section Boxes----------*/

.video{
    width: 80%;
    height: auto;
    border:2px solid #feca57;
    margin-left: 10%;
    margin-top: 30px;
}
.app{
    width: 80%;
    height: auto;
    border:2px solid #ee5253;
    margin-left: 10%;
    margin-top: 30px;
}
.site{
    width: 80%;
    height: auto;
    border:2px solid #0abde3;
    margin-left: 10%;
    margin-top: 30px;
}
.verify{
    width: 80%;
    height: auto;
    border:2px solid #10ac84;
    margin-left: 10%;
    margin-top: 30px;
}

/*----------For Designing What's Inside The Boxes----------*/

.vid-link{
    font-size: 20px;
    float: justify;
    color: #feca57;
    padding: 10px;
}
.app-link{
    font-size: 20px;
    float: justify;
    color: #ee5253;
    padding: 10px;
}
.site-link{
    font-size: 20px;
    float: justify;
    color: #0abde3;
    padding: 10px;
}
.ver-link{
    font-size: 20px;
    float: justify;
    color: #10ac84;
    padding: 10px;
}

/*--------------------For Glow Button Inside Glow Boxes--------------*/

.vid-btn{
    width: 60%;
    height: 30px;
    font-size: 20px;
    color: #0f0f0f;
    background-color: #feca57;
    margin-left: 20%;
    display: block;
    text-align: center;
    border-radius: 5px;
    line-height: 30px;
    margin-bottom:20px;
    text-decoration:none;
    color:#0f0f0f;
}
.vid-btn:hover{
    background-color: #ffd375;
    cursor: pointer;
    color: white;
}
.app-btn{
    width: 60%;
    height: 30px;
    font-size: 20px;
    color: #0f0f0f;
    background-color: #ee5253;
    margin-left: 20%;
    display: block;
    text-align: center;
    border-radius: 5px;
    line-height: 30px;
    margin-bottom:20px;
    text-decoration:none;
    color:#0f0f0f;
}
.app-btn:hover{
    background-color: #f35c5c;
    cursor: pointer;
    color: white;
}
.site-btn{
    width: 60%;
    height: 30px;
    font-size: 20px;
    color: #0f0f0f;
    background-color: #0abde3;
    margin-left: 20%;
    display: block;
    text-align: center;
    border-radius: 5px;
    line-height: 30px;
    margin-bottom:20px;
    text-decoration:none;
    color:#0f0f0f;
}
.site-btn:hover{
    background-color: #3dc4e2;
    cursor: pointer;
    color: white;
}
.ver-btn{
    width: 60%;
    height: 30px;
    font-size: 20px;
    color: #0f0f0f;
    background-color: #10ac84;
    margin-left: 20%;
    display: block;
    text-align: center;
    border-radius: 5px;
    line-height: 30px;
    margin-bottom:20px;
    text-decoration:none;
    color:#0f0f0f;
}
.ver-btn:hover{
    background-color: #29caa2;
    cursor: pointer;
    color: white;
}

/*----------------For About----------------*/

.abouts{
    width: 60%;
    height: 400px;
    background-color: #0f0f0f;
    margin-left: 20%;
}
.about_title{
    font-size: 50px;
    color: lightgrey;
    text-align: center;
}
.about_text{
    width:70%;
    height: auto;
    margin-left: 15%;
    text-align: center;
    float: justify;
    font-size: 20px;
    color: lightgrey;
}

/*----------------For Team----------------*/
.team{
    width: 60%;
    height: auto;
    background-color: #0f0f0f;
    margin-left: 20%;
    margin-top: 100px;
}
.team_title{
    font-size: 50px;
    color: lightgrey;
    text-align: center;
}

/*-----------For Founder of The Site-----------*/

.founders{
    width: 98%;
    background-color: #0f0f0f;
    height: auto;
    padding: 10px;
    float: left;
    text-align: center;
    display: block;
    margin-top: 50px;
    color: lightgrey;
}
.founder{
    width: 40%;
    background: #0f0f0f;
    color: lightgrey;
    text-align: center;
    height:auto;
}
.founder img{
    width: 100px;
    height: 100px;
    border-radius: 50%;
  }
  .founder_name{
    font-size: 20px;
    text-transform: uppercase;
    margin: 20px 0;
    color: aliceblue;
  }
  .founder_oc{
      color: #feca57;
      font-size: 15px;
      padding: 0;
      margin-top: -20px;
  }

  
/*-----------For Purpose of The Site-----------*/
 
.advisers{
    width: 98%;
    background-color:#0f0f0f;
    height: auto;
    padding: 10px;
    float: left;
    text-align: center;
    display: block;
    margin-top: 50px;
    color: lightgrey;
}
.adviser{
    width: 40%;
    background: #0f0f0f;
    color: lightgrey;
    text-align: center;
    height:auto;
    margin-left: 49%;
}
.adviser img{
    width: 100px;
    height: 100px;
    border-radius: 50%;
  }
  .ad_name{
    font-size: 20px;
    text-transform: uppercase;
    margin: 20px 0;
    color: aliceblue;
  }
  .ad_oc{
      color: #feca57;
      font-size: 15px;
      padding: 0;
      margin-top: -20px;
  }

/*-----------For Developer of The Site-----------*/

.developers{
    width: 98%;
    background-color:#0f0f0f;
    height: auto;
    padding: 10px;
    float: left;
    text-align: center;
    display: block;
    margin-top: 50px;
    color: lightgrey;
}
.developer{
    width: 40%;
    background: #0f0f0f;
    color: lightgrey;
    text-align: center;
    height:auto;
}
.developer img{
    width: 100px;
    height: 100px;
    border-radius: 50%;
  }
  .dev_name{
    font-size: 20px;
    text-transform: uppercase;
    margin: 20px 0;
    color: aliceblue;
  }
  .dev_oc{
      color: #feca57;
      font-size: 15px;
      padding: 0;
      margin-top: -20px;
  }
  .linkers{
      text-decoration:none;
      color: inherit;
  }

  /*----------------For Responsive----------------*/
  @media only screen and (max-width: 500px) 
  {
      body{
          overflow-x:hidden;
          padding:0;
          margin:0;
      }
      /* for video */
      .landing_video{
          padding:0;
          width:104%;
          margin:0;
          height:auto;
          margin-top:40px;
      }
      
      /* for Content Area */
      .content_area{
          width: 100%;
          margin-left: 0;
          padding:0;
      }
      .task_title{
          font-size: 40px;
          padding:0;
      }
      .welcome_title{
          font-size: 15px;
          padding:0;
      }

      /* For Section */
      .mission_sections{
          width: 100%;
          padding: 0%;
      }
      .Video_section{
          width: 100%;
          height: auto;
          margin-left: 0;
          padding:0;
      }
      .App_Section{
        width: 100%;
        height: auto;
        margin-left: 0;
        margin-top: 325px;
        padding:0;
    }
    .Site_Section{
        width: 100%;
        height: auto;
        margin-left: 0;
        margin-top: 675px;
        padding:0;
    }
    .Verification_Section{
        width: 100%;
        height: auto;
        margin-left: 0;
        margin-top: 1000px;
        padding:0;
    }


    /* For About */
    .abouts{
        width: 100%;
        margin-left: 0;
        margin-top: 1100px;
        padding:0;
    }
    .about_text{
        width: 90%;
        margin-left: 5%;
        text-align:justify;
        float:justify;
        padding:0;

    }

    /* For Team */

    .team{
        width:100%;
        margin-left: 0;
        margin-top:50px;
        padding:0;
    }
    .founders{
        width: 100%;
        margin-left: 0;
        padding:0;
    }
    .founder{
        width:80%;
        margin-left: 10%;
    }
    .advisers{
        width: 100%;
        margin-left: 0;
        padding:0;
    }
    .adviser{
        width:80%;
        margin-left: 10%;
    }
    .developers{
        width: 100%;
        margin-left: 0;
        padding:0;
    }
    .developer{
        width:80%;
        margin-left: 10%;
    }


  }
</style>
<body>
@include('layout.navbar')

<div id="dialog" title="Contact form">
    <!-- <p>appear now</p> -->
</div>

    <div class="landing">
            <img src="/assets/landing_1.png" class="landing_video">
    </div>
    <div class="content_area">
        <h1 class="task_title">Tasks Table</h1>
        <h1 class="welcome_title">
            Welcome, Below Are Some Daily Tasks In Each Section<br>
            Complete Each Section And Get Awarded.</h1>
        <div class="mission_sections">

            <!-- This Is for Video Section -->
            <div class="Video_section">
            <label class="video1">Streaming</label><br>
            <span class="yellow"></span>
            <a href="/videos" class="linkers">
            <div class="video">
                <p class="vid-link">Complete The Tasks And Get Awarded. Watching Gaming Streams</p>
                <a class="vid-btn">Start</a>
            </div>
            </a>
            </div>

            <!-- This Is For App Section -->
            
            <div class="App_Section">
            <label class="app1">Gold</label><br>
            <span class="red"></span>
            <a href="/app" class="linkers">
            <div class="app">
                <p class="app-link">Complete The Tasks And Get Awarded. Download Recommended Gaming Apps</p>
                <a class="app-btn">Start</a>
            </div>
            </a>
            </div>
            <!-- This Is For Site Section -->

            
            <div class="Site_Section">
            <label class="site1">Premium</label><br>
            <span class="blue"></span>
            <a href="/website" class="linkers">
            <div class="site">
                <p class="site-link">Complete The Tasks And Get Awarded. Visit Gaming Platform Online</p>
                <a class="site-btn">Start</a>
            </div>
            </a>
            </div>
            <!-- This Is For Verification Section -->
            
            <div class="Verification_Section">
            <label class="verify1">Verification</label><br>
            <span class="green"></span>
            <a href="/verify" class="linkers">
            <div class="verify">
                <p class="ver-link">Verify Your Account By Just Sharing The Link Of Monaptor To Your Friends. Click Start :).</p>
                <a class="ver-btn">Verify</a>
            </div>
            </a>
            </div>

        </div>
    </div>
    <div class="abouts">
        <h1 class="about_title">Abouts</h1>
        <div class="about_text">
            If You Are Looking For Something Related to Gaming This Is The Best Place You Can Find All Over Our Globe. While Watching And Downloading Awesome Games Get Awarded as Well And You Can Withdraw Or Redeem All Your Point. You Can Redeem Your Points By Purchasing Gift Cards of By Playing Games Packages. Hope We Have Brought Smile On Your Face. 
        </div>
    </div>
    <div class="team">
        <h1 class="team_title">Team</h1>

        <div class="founders">
        <div class="founder">
              <img src="/assets/founder.png">
              <div class="founder_name">Andrew Buffets</div>
                <p class="founder_oc">Founder</p>
              <p>
                Hello There, I am Andrew Buffets The Founder Of This Awesome Looking Website. I hope That This Site Will Make You Happy.<br>Thank You,<br> Andrew Buffets
            </p>
            </div>
        </div>

        <div class="advisers">
        <div class="adviser">
              <img src="/assets/adviser.png">
              <div class="ad_name">Zach Fletcher</div>
                <p class="ad_oc">Adviser</p>
              <p>
                Good Day Everyone, I am Zach Fletcher The Adviser Of Monaptor.com. If You Have Any Feedback or Advice Related To Our Site Please Contact Us below.<br>Thank You All,<br>Zach Fletcher
            </p>
                </div>
           </div>

        <div class="developers">
            <div class="developer">
                <img src="/assets/dev.png">
                <div class="dev_name">James Wilson</div>
                <p class="dev_oc">Developer</p>
                <p>
                Hello Awesome Users, I am James Wilson The Developer Of Monaptor.com. If You Have Any Feedback, New Designs or Suggestions Related To Our Site Please Contact Us Down below.<br>Thank You Awesome User,<br>James Wilson
            </p>
            </div>
        </div>
</div>
<div class="footer">@include('layout.footer')</div>
</body>
</html>