<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>about</title>
    <style>
      body
      {
        background-image: radial-gradient(circle, #03123b, #041030, #050c25, #03081a, #00030d);
      }
      .main
      {
        width:900px;
      }

      .topnav
      {
        overflow: hidden;
        background-image: linear-gradient(to bottom, #000000, #151515, #101010, #080808, #1a1a1a);
        width: 100%;
        position: absolute;
      }
      .navi a
      {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        align-items: stretch;
        text-decoration: none;
        font-size: 17px;
      }
      .navi a:hover
      {
        background-image: linear-gradient(to right bottom, #067580, #006679, #005771, #004866, #003a5a, #003154);
        color: white;
        border-top: 0px;
        border-left: 0.5;
        border-right: 0.5;
        border-bottom: 2px;
        border-radius: 3px;
        opacity: 0.9;
      }
      .navi a:active
      {
        background-color: #4CAF50;
        color: white;
        border-radius: 3px;
        opacity: 0.9;
      }

      iframe
      {
        margin-top:100px;
        border-radius: 10px;

      }
      .pulse
      {
        position: fixed;
        float: right;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 550px;
        margin-left:750px;
        margin-top:100px;
        height: 550px;
        background-image: url(EARTH1.png);
        background-size: cover;
        animation: animateEarth 10s linear infinite;
        border-radius: 50%;
        box-shadow: inset 0 0 40px rgba(255, 255, 255, 0.5);
      }
      h2
      {
        font-size: 30px;
        padding-bottom: 5px;
        padding-left: 5px;
        padding-top: 30px;
        font-weight: bold;
      }
      .pulse span
      {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        display: block;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: tranparent;
        border: 2px solid #fff;
        box-sizing: border-box;
        animation: animate 10s linear infinite;
      }
      .pulse span:nth-child(1)
      {
        animation-delay: 0s;
      }
      .pulse span:nth-child(2)
      {
        animation-delay: -2s;
      }
      .pulse span:nth-child(3)
      {
        animation-delay: -4s;
      }
      .pulse span:nth-child(4)
      {
        animation-delay: -6s;
      }
      .pulse span:nth-child(5)
      {
        animation-delay: -8s;
      }
      .pulse span:nth-child(6)
      {
        animation-delay: -10s;
      }
      @keyframes animate
      {
        0%
        {
          width: 600px;
          height: 600px;
          opacity: 1;
        }
        25%
        {
          opacity: 0.75;
        }
        50%
        {
          opacity: 0.5;
        }
        75%
        {
          opacity: 0.25;
        }
        100%
        {
          width: 1000px;
          height: 1000px;
          opacity: 0;
        }
      }
      @keyframes animateEarth
      {
        0%
        {
          background-position: 0 0;
        }
        100%
        {
          background-position: 719px 0;
        }
      }
      p
      {
        font-size: 20px;
        color: #fff;
        text-align:justify;
      }
    </style>
  </head>
  <body>
    <div class="main">
      <nav class="topnav">
        <div class="navi">
          <a href="home.php" ><img src="images/list_img.png" alt="" />Home</a>
          <a href="about.php"><img src="images/list_img.png" alt="" />About</a>
          <a href="contact.php"><img src="images/list_img.png" alt="" />Contact</a>

          <?php
          if( isset($_SESSION['sessionvar']) && !empty($_SESSION['sessionvar']) )
          {
            ?><a style="align-items: right; float:right;" href="profile.php"><img style="height:30px" src="images/USER_ICON.png" alt="" /></a>
            <?php
          }
          else
          {?>
              <a style="align-items: right; float:right;" href="RegLog.php"><img src="images/USER_ICON.png" alt="" /></a>
              <?php
          } ?>

        <!--  <a href="Reglog.php" style="align-items: right; float:right;"><img src="images/USER_ICON.png" alt="" /></a>-->
        </div>
      </nav>
      <div class="pulse">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <img src="images/logo.png" style="float: both; margin-top: 50px;" alt="">
    <p>    Blockchain, which began to emerge as a real-world tech option in 2016 and 2017, is poised to change IT in much the same way open-source software did a quarter century ago. And in the same way Linux took more than a decade to become a cornerstone in modern application development, Blockchain will likely take years to become a lower cost, more efficient way to share information and data between open and private business networks.</p><p>

<p>Based on a distributed, peer-to-peer (P2P) topology, blockchain or distributed ledger technology (DLT) allows data to be stored globally on thousands of servers – while letting anyone on the network see everyone else's entries in real-time. That makes it difficult for one user to gain control of, or game, the network.</p>

<p>However, in highly publicized incidents over the five years, blockchains have been hacked, typically through a cryptocurrency application such as bitcoin. Smaller blockchains with fewer nodes (or computers) have also been susceptible to fraud, with would-be thieves gaining control of the majority of nodes.</p>

<p>For businesses, however, blockchain holds the promise of transactional transparency – the ability to create secure, real-time communication networks with partners around the globe to support everything from supply chains to payment networks to real estate deals and healthcare data sharing.</p>

<p>Recent hype around this relatively new technology is real because DLT, in essense, represents a new paradigm for how information is shared; tech vendors and enterprises, not surprisingly have rushed to learn how they can use the distributed ledger technology (DLT) to save time and admin costs. Numerous companies have already rolled out, or are planning to launch, pilot programs and real-world projects across a variety of industries - everything from financial technology (FinTech) and healthcare to mobile payments and global shipping.</p>

<p>So while blockchain isn't going to replace traditional corporate relational databases, it does open new doors for the movement and storage of transactional data inside and outside of global enterprises.</p>

<p>Driven mainly by financial technology (fintech) investments, blockchain has seen a fast uptick in adoption for application development and pilot tests in a number of industries and will generate more than $10.6 billion in revenue by 2023, according to a report from ABI Research. Most of that revenue figure is expected to come from software sales and services.</p>

<p>Blockchain adoption is expected be steady, as the changes it brings gain momentum, according Karim Lakhani, a principal investigator of the Crowd Innovation Lab and NASA Tournament Lab at the Harvard Institute for Quantitative Social Science. "Conceptionally, this is TCP/IP applied to the world of business and transactions," Lakhani said. "In the '70s and '80s, TCP/IP was not imaginable to be as robust and scalable as it was. Now, we know that TCP/IP allows us all this modern functionality that we take for granted on the web.</p>
<p><b>"Blockchain has the same potential." </b></p>
    <center><iframe width="560" height="315" src="https://www.youtube.com/embed/sqY2Q59AZxY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><center>

      <p>Martha Bennett, a principal analyst for Forrester Research, noted any blockchain or "DLT" project is a long-term strategic initiative, and disappointment is inevitable "when the hoped-for miracles fail to materialize.</p>
      <p>"It's not realistic to expect a solid cost model or definitive benefits statement because it's simply too early for that," Bennett said. "To assemble real evidence, we need to have a number of fully operationalized, scaled-out deployments running for at least a couple of years. And we're simply not there yet."</p>
      <h2 style="color:#fff; text-align:left">What is blockchain and how does it work?</h2>
      <p>First and foremost, blockchain is a public electronic ledger built around a P2P system that can be openly shared among disparate users to create an unchangeable record of transactions, each time-stamped and linked to the previous one. Every time a set of transactions is added, that data becomes another block in the chain (hence, the name).</p>

<p>Blockchain can only be updated by consensus between participants in the system, and once new data is entered it can never be erased. It is a write-once, append-many technology, making it a verifiable and auditable record of each and every transaction.</p>

<p>While it has great potential, blockchain technology development is still early days; CIOs and their business counterparts should expect setbacks in deploying the technology, including the real possibility of serious bugs in the software used atop blockchain. And as some companies have already discovered, it's not the be-all solution to many tech problems.</p>

<p>Blockchain standards organizations, universities and start-ups have proposed newer consensus protocols and methods for spreading out the computational and data storage workload to enable greater transactional throughput and overall scalability – a persistent problem for blockchain.  And the Linux Foundation’s Hyperledger Project has created modular tools for building out blockchain collaboration networks.</p>

<p>While some industry groups are working toward standardizing versions of blockchain software, there are also hundreds of startups working on their own versions of the distributed ledger technology.</p>
  </div></body>
</html>
