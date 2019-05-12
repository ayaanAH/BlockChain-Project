<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script>
          $(document).ready(function(){
          // Add smooth scrolling to all links
          $("a").on('click', function(event)
          {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "")
            {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 1000, function(){
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
</script>

        <style type="text/css">

            * {
                margin: 0;
                padding: 0;
            }
            body
            {
                font-family: cursive;
                font-weight: 700;
            }
            .welcome-section {
                position: absolute;
                width: 100%;
                height: 100%;
                text-align:center;
                top: 0;
                left: 0;
                background-image: url(images/blockchain-libia.png);
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                overflow: hidden;
            }
            .welcome-section .content-wrap {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate3d(-50%, -50%, 0);
            }
            .welcome-section .content-wrap .fly-in-text {
                list-style: none;
            }
            .welcome-section .content-wrap .fly-in-text li {
                display: inline-block;
                margin-right: 30px;
                font-size: 300px;
                color: #fff;
                opacity: 1;
                transition: all 3s ease;
            }
            .welcome-section .content-wrap .fly-in-text li:last-child {
                margin-right: 0;
            }
            .welcome-section .content-wrap .enter-button {
                display: block;
                text-align: center;
                font-size: 100px;
                text-decoration: none;
                text-transform: uppercase;
                color: #adff2f;
                opacity: 1;
                transition: all 1s ease 2s;
            }

            .welcome-section.content-hidden .content-wrap .fly-in-text li { opacity: 0; }
            .welcome-section.content-hidden .content-wrap .fly-in-text li:nth-child(1) { transform: translate3d(-100px, 0, 0); }
            .welcome-section.content-hidden .content-wrap .fly-in-text li:nth-child(2) { transform: translate3d(0, 50px, 0); }
            .welcome-section.content-hidden .content-wrap .fly-in-text li:nth-child(3) { transform: translate3d(100px, 0, 0); }
            .welcome-section.content-hidden .content-wrap .enter-button { opacity: 0; transform: translate3d(0, -30px, 0); }

            @media (min-width: 800px) {
                .welcome-section .content-wrap .fly-in-text li { font-size: 10em; }
                .welcome-section .content-wrap .enter-button { font-size: 1.5em; }
            }

            .enter-button
            {
              border-radius: 10px;
              background: transparent;
              border: none;
              color: #FFFFFF;
              font-size: 40px;
              opacity:0.9;
              width:100%;
              text-align: center;
              font-size: 28px;
              padding: 20px;
              transition: all 0.5s;
              cursor: pointer;
              margin: 5px;
            }

            .enter-button span {
              cursor: pointer;
              display: inline-block;
              transition: 0.5s;
            }

            .enter-button span:after {
              content: '\00bb';
              opacity: 0;
              top: 0;
              right: -20px;
              transition: 0.5s;
            }

            .enter-button:hover span {
              padding-right: 25px;
            }

            .enter-button:hover span:after {
              opacity: 1;
              right: 0;
            }


        </style>
    </head>
    <body>


        <div class="welcome-section content-hidden">
            <div class="content-wrap">
                <ul class="fly-in-text">
                    <li>Welcome</li>
                    <li>To</li>
                    <li>Blockchain</li>
                </ul>

                <a href="#" class="enter-button">Enter</a>
            </div>
        </div>






        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript">

            $(function() {

                var welcomeSection = $('.welcome-section'),
                    enterButton = welcomeSection.find('.enter-button');

                setTimeout(function() {
                    welcomeSection.removeClass('content-hidden');
                }, 500);

                enterButton.on('click', function(e) {
                    e.preventDefault();
                    welcomeSection.addClass('content-hidden').fadeOut();
                    location.href="home.php";
                });


            })();



        </script>

    </body>
</html>
