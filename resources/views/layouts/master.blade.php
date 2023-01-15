<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('assets/css/index.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/headerMain.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/nav_css.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/indexContent.cs')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/stylefront.css')}}" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>

    </title>
</head>

<body>
    <div id="headerMain">
        <div id="headerMainSec">
            <div id="btn">
                <button>Home</button>
                <button>Schedule</button>
                <button>Team</button>
                <button>Player</button>
                <button>News</button>
            </div>
            <div id="headermaininner">
                <div id="card1" class="card">
                    <div id="cardInner">
                        <div>
                            <h5 style="margin: 0px 15px 0px 0px;color: rgb(0, 0, 0);" id="type">Live</h5>
                        </div>
                        <div>
                            <h5 style="margin: 3px 15px 0px 0px;font-size: .7rem;color: rgb(151, 149, 149);" id="vs">
                                <span style="color: black;">T20 .</span> Bangladesh vs India
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teamf"><b>Bangladesh- 115/6
                                    (18.3 overs)</b> </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teams"><b>India- yet to bat</b>
                            </h5>
                        </div>
                        <!-- <div style="width: 100%; background-color: rgb(211, 208, 208);">
                        <h5 style="margin: 5px 15px 0px 0px;font-size: .7rem;" id="teams">Mumbai Indians won the
                            match</h5>
                    </div> -->
                    </div>
                </div>
                <div id="vr1" class="verticalLine"></div>
                <div id="card2" class="card">
                    <div id="cardInner">
                        <div>
                            <h5 style="margin: 0px 15px 0px 0px;color: rgb(31, 17, 17);" id="type1">RESULT</h5>
                        </div>
                        <div>
                            <h5 style="margin: 3px 15px 0px 0px;font-size: .7rem;color: rgb(151, 149, 149);" id="vs">
                                <span style="color: black;">T20 .</span> Afganistan Vs Sri-Lanka
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teamf1"><b>Afg- 158/6 (20
                                    overs)</b></h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teams1"><b>Sri- 115/10 (18.3
                                    overs)</b>
                            </h5>
                        </div>
                        <div style="width: 100%; background-color: rgb(211, 208, 208);">
                            <h5 style="margin: 5px 15px 0px 0px;font-size: .7rem;" id="teams1"><b>Afganistan won the
                                    Match</b></h5>
                        </div>
                    </div>
                </div>
                <div id="vr2" class="verticalLine"></div>
                <div id="card3" class="card">
                    <div id="cardInner">
                        <div>
                            <h5 style="margin: 0px 15px 0px 0px;color: rgb(36, 26, 26);" id="type2">Upcomming</h5>
                        </div>
                        <div>
                            <h5 style="margin: 3px 15px 0px 0px;font-size: .7rem;color: rgb(151, 149, 149);" id="vs">
                                <span style="color: black;">T20 .</span>
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teamf2"><b>Bangladesh</b>
                                <strong>vs</strong> <b>England</b>
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teams2"><b>Today, 02:00 PM</b>
                            </h5>
                        </div>

                    </div>
                </div>
                <div id="vr3" class="verticalLine"></div>
                <div id="card3" class="card">
                    <div id="cardInner">
                        <div>
                            <h5 style="margin: 0px 15px 0px 0px;color: rgb(36, 26, 26);" id="type2">Upcomming</h5>
                        </div>
                        <div>
                            <h5 style="margin: 3px 15px 0px 0px;font-size: .7rem;color: rgb(151, 149, 149);" id="vs">
                                <span style="color: black;">T20 .</span>
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teamf2"><b>Australia</b>
                                <strong>vs</strong> <b>new zealand</b>
                            </h5>
                        </div>
                        <div class="iplTeamName">
                            <h5 style="margin: 15px 15px 0px 0px;font-size: .7rem;" id="teams2"><b>Today, 08:00 PM</b>
                            </h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="containerfrontpage">
    <div id="box1">
    <img
                    src="t20.jpg"
                    alt="">
</div>
        <div id="box2">
            <h2 class="havehave">LATEST NEWS</h2>
            <p class="class30">Perth Scorchers lose Bash Boost point for fielding ineligible player</p>
            <p class="time1">1h ago</p>
            <div class="line"></div>
            <p class="class30">BCB plans to launch 'Bangla Tigers' programme during AFG series</p>
            <p class="time1">2h ago</p>
            <div class="line"></div>
            <p class="class30">NZ's limited-overs tour of Australia postponed</p>
            <p class="time1">2h ago</p>
            <div class="line"></div>
            <p class="class30">Mohammad Hasnain reported for suspect bowling action in BBL</p>
            <p class="time1"> 1 day ago</p>
            <div class="line"></div>
            <p class="class30">'De Kock will have a point to prove' - Bavuma</p>
            <p class="time1">2h ago</p>
            <div class="line"></div>
            <p class="class30">'We aren't a team that's scared to try' - KL Rahul</p>
            <p class="time1">2h ago</p>
            <div class="line"></div>
            <p class="class30">ECB to investigate cricketers' drinking session in Hobart</p>
            <p class="time1">2h ago</p>
            <div class="line"></div>
            <p class="class30">Somerset sign Matt Renshaw for 2022 season</p>
            <p class="time1">1h ago</p>
            <div class="line"></div>
            <p class="class30">Mooney undergoes jaw surgery after training accident</p>
            <p class="time1">2h ago</p>
            <div class="lineline"></div>


            <h3 class="havehave">LATEST PHOTOS</h3>
            <img width="200px" class="imgg"
                src="https://www.cricbuzz.com/a/img/v1/165x95/i1/c224488/australia-vs-england-5th-test.jpg" alt="">
            <p class="class30">Australia vs England, 5th Test, Day 3, Hobart</p>
            <p class="time1">Sun, Jan 16 2022</p>
            <div class="linethorugh24"></div>
            <img width="200px" class="imgg"
                src="https://www.cricbuzz.com/a/img/v1/165x95/i1/c224297/australia-vs-england-5th-test.jpg" alt="">
            <p class="class30">Looking back at the Kohli era</p>
            <p class="time1">Sat, Jan 15 2022</p>
            <div class="linethorugh24"></div>
            <img width="200px" class="imgg"
                src="https://www.cricbuzz.com/a/img/v1/165x95/i1/c224297/australia-vs-england-5th-test.jpg" alt="">
            <p class="class30">Australia vs England, 5th Test, Day 2, Hobart</p>
            <p class="time1">Sat, Jan 15 2022</p>
            <div class="linethorugh24"></div>
            <img width="200px" class="imgg"
                src="https://www.cricbuzz.com/a/img/v1/165x95/i1/c224122/australia-vs-england-5th-test.jpg" alt="">
            <p class="class30">Australia vs England, 5th Test, Day 1, Hobart</p>
            <p class="time1">Fri, Jan 14 2022</p>
            <div class="linethorugh24"></div>
            <img width="200px" class="imgg"
                src="https://www.cricbuzz.com/a/img/v1/165x95/i1/c223971/south-africa-vs-india-3rd-tes.jpg" alt="">
            <p class="class30">South Africa vs India, 3rd Test, Day 3</p>
            <p class="time1">Sat, Jan 15 2022</p>
            <div class="linethorugh24"></div>
            <img width="200px" class="imgg"
                src="https://www.cricbuzz.com/a/img/v1/165x95/i1/c223833/south-africa-vs-india-3rd-tes.jpg" alt="">
            <p class="class30">Looking back at the Kohli era</p>
            <p class="time1">Sat, Jan 15 2022</p>
            <div class="lineline"></div>
            <h2 class="havehave">SCHEDULE</h2>
            <p class="class30">South Africa vs India, 1st ODI</p>
            <p class="time1">Wed Jan 19 • 2:00 PM GMT</p>
            <div class="line"></div>
            <p class="class30">South Africa vs India, 2nd ODI</p>
            <p class="time1">Fri Jan 21 • 2:00 PM GMT
            </p>
            <div class="line"></div>
            <p class="class30">Afghanistan vs Netherlands, 1st ODI</p>
            <p class="time1">Fri Jan 21 • 12:30 PM GMT</p>
            <div class="line"></div>
            <p class="class30">Sri Lanka vs Zimbabwe, 3rd ODI</p>
            <p class="time1">Fri Jan 21 • 2:00 PM GMT</p>
            <div class="line"></div>
            <p class="class30">South Africa vs India, 3rd ODI</p>
            <p class="time1">Sun Jan 23 • 2:00 PM GMT</p>
            <div class="line"></div>
            <p class="class30">Afghanistan vs Netherlands, 2nd ODI</p>
            <p class="time1">Sun Jan 23 • 12:30 PM GMT</p>
            <div class="line"></div>
            <p class="class30">West Indies vs England, 1st T20I</p>
            <p class="time1">Fri Jan 21 • 12:30 PM GMT</p>
            <div class="line"></div>
            <p class="class30">Afghanistan vs Netherlands, 1st ODI</p>
            <p class="time1">Fri Jan 21 • 12:30 PM GMT</p>
            <div class="line"></div>
            <p class="shrawani12">More Matches..</p>
        </div>

        <div id="box3">
            <p class="newbox3">INDIA'S TOUR OF SOUTH AFRICA, 2021-22</p>
            <img width="400px" class="haveto2"
                src="https://www.cricbuzz.com/a/img/v1/420x235/i1/c224838/subplots-drive-the-interest-in.jpg" alt="">
            <h1 class="newh1fordiv">Subplots drive the interest in second-tier ODI series</h1>
            <p class="newbox3">With an eye in his workload management, the hosts have released pace spearhead Rabada
                from
                the ODI squad</p>
            <p class="powerof">'We aren't a team that's scared to try' - KL Rahul</p>
            <p class="powerof">Nobody is in weird space - Bumrah on India's leadership, coaching transition</p>
            <p class="powerof">'De Kock will have a point to prove' - Bavuma</p>
            <div class="linethorugh"></div>
            <p class="newbox3">THE ASHES 2021-22</p>
            <img width="400px" class="haveto2"
                src="https://www.cricbuzz.com/a/img/v1/420x235/i1/c224637/the-ashes-with-no-urn.jpg" alt="">
            <h1 class="newh1fordiv">The Ashes with no urn</h1>
            <p class="newh1fordiv">England's umpteenth batting collapse in Hobart and their meek concession of the
                series
                also kind of left their victors a little unsure of their own supremacy</p>
            <p class="powerof">Root keen to lead England's revival, but has he lost that chance?</p>
            <p class="powerof">Cummins hails Green as 'the complete package'</p>
            <p class="powerof">Report / Australia complete 4-0 series win</p>
            <p class="powerof">ECB to investigate cricketers' drinking session in Hobart</p>
            <div class="linethorugh"></div>
            <p class="newbox3">SL VS ZIM, 2ND ODI</p>
            <img width="400px" class="haveto2"
                src="https://www.cricbuzz.com/a/img/v1/420x235/i1/c224843/spirited-zimbabwe-make-it-1-1.jpg" alt="">
            <h1 class="newh1fordiv"> Spirited Zimbabwe make it 1-1</h1>
            <p class="newbox3">A collective batting effort helped Zimbabwe put up 302/8</p>
            <p class="newh1fordiv">Report / Shanaka ton in vain as Zimbabwe level series</p>
            <div class="linethorugh"></div>
            <p class="newbox3">DOUBTS OVER PLAYERS PARTICIPATION</p>
            <img width="400px" class="haveto2"
                src="https://www.cricbuzz.com/a/img/v1/420x235/i1/c224687/top-australian-and-english-pla.jpg" alt="">
            <h1 class="newh1fordiv">Top Australian and English players mulling over mega IPL auction</h1>
            <p class="newbox3">Following recent changes in the IPL timeline, the BCCI has extended the deadline up to
                January 20 for enrolment in the mega auction</p>
            <div class="linethorugh"></div>
            <p class="newbox3">INDIA CAPTAINCY</p>
            <img width="400px" class="haveto2"
                src="https://www.cricbuzz.com/a/img/v1/420x235/i1/c224447/kohli-steps-down-as-test-capta.jpg" alt="">
            <h1 class="newh1fordiv">Kohli steps down as Test captain</h1>
            <p class="newbox3">The 33-year-old had already resigned as the T20I captain and was removed as ODI skipper
            </p>
            <p class="newh1fordiv">Making sense of Virat Kohli's decision to step down</p>
            <p class="powerof">Reactions / 'Whoaaa... Didn't see that coming'</p>
            <p class="powerof">In pics / Looking back at the Kohli era</p>
            <p class="powerof">Stats / India's incredible journey under Kohli</p>
            <div class="linethorugh"></div>
            <p class="newbox3">TOUR POSTPONED</p>

            <div class="wif">
                <img width="200px" class="newimgto"
                    src="https://www.cricbuzz.com/a/img/v1/135x75/i1/c224848/nzs-limited-overs-tour-of-aus.jpg" alt="">
                <h4 class="classh4">NZ's limited-overs tour of Australia postponed</h4>
                <p>

            </div>
            <p class="newbox3">Border controls and uncertain quarantine in NZ pushed forward the series comprising 3
                ODIs
                and a one-off T20I</p>
            <div class="linethorugh"></div>
            <p class="newbox3">BBL</p>
            <div class="wif">
                <img width="200px" class="newimgto"
                    src="https://www.cricbuzz.com/a/img/v1/135x75/i1/c224874/perth-scorchers-lose-bash-boos.jpg" alt="">
                <h4 class="classh4">Perth Scorchers lose Bash Boost point for fielding ineligible player
                    2h ago</h4>
            </div>
            <p class="powerof">BBL
                Perth Scorchers lose Bash Boost point for fielding ineligible player
                Perth Scorchers lose Bash Boost point for fielding ineligible player
                2h ago
                Scorchers brought on Brayden Stepien to keep wickets for 14 overs, even though he was not part of the
                18-man
                squad</p>
            <div class="linethorugh"></div>
            <p class="shrawani499">More News..</p>


        </div>

        <div id="box4">
            <img width="330px" class="imgdivand"
                src="https://static.clmbtech.com/ctn/29726/images/24/9251451367c467a89a7c499ec5e13e05_1632474563480_0.webp"
                alt="">
            <div class="lineline"></div>
            <h3 class="havehave">FEATURED VIDEOS</h3>
            <iframe width=90% style="padding-left: 30px;" height="180" src="https://www.youtube.com/embed/gE5V0ILSPmo"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <h4 class="newh1fordiv">South Africa v India: ODI Series Preview
            </h4>
            <p class="time1">d ago</p>
            <iframe width=90% style="padding-left: 30px;" height="180" src="https://www.youtube.com/embed/LQLytDJv1KA"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <h4 class="newh1fordiv">Gabba 21 & WC 83 win are two greatest moments of Indian cricket: Harsha Bhogle
            </h4>
            <p class="time1">Jan 19 2021</p>
            <iframe width=90% style="padding-left: 30px;" height="180" src="https://www.youtube.com/embed/Ox7nGdcSDz8"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <h4 style="padding: 0px 10px;"> ►
                टीम India का पिछली गलतियों को दोहराना चिंता का विषय - Zaheer Khan</h4>
            </h4>
            <p class="time1">Jan 19 2021</p>
            <button class="btnbtn">More Videos</button>
            <div class="lineline"></div>
            <img width="330px" class="imgdivandforfor"
                src="https://www.cricbuzz.com/a/img/v1/290x164/i1/c224957/cricbuzz-live-south-africa-v.jpg" alt="">
            <h4 class="newh1fordiv">Cricbuzz Live: South Africa v India, 1st ODI, Pre-match show
            </h4>
            <div class="lineline"></div>
            <h3 class="havehave">SPECIALS</h3>
            <img width="330px" class="imgdivand"
                src="https://www.cricbuzz.com/a/img/v1/300x170/i1/c212798/the-contrasting-fortunes-of-jo.jpg" alt="">

            <h4 class="newh1fordiv">Virat Kohli and the Mutability of Greatness</h4>
            <p class="powerof">The contrasting fortunes of Joe Root and Virat Kohli in the ongoing series have
                reminded
                us of the ebb and flow of greatness as well as the way we crave it, writes Jon Hotten in a new
                column
                for Cricbuzz Plus</p>

            <img width="330px" class="imgdivand"
                src="https://www.cricbuzz.com/a/img/v1/300x170/i1/c217848/shastri-oversaw-indias-transi.jpg" alt="">

            <h3 class="newh1fordiv">Ravi Shastri's report card</h3>
            <p class="time1"> A detailed look into what the former coach's contributions were to the Indian side,
                and
                the legacy he leaves</p>

            <img width="330px" class="imgdivand"
                src="https://www.cricbuzz.com/a/img/v1/300x170/i1/c213577/venkatesh-iyer-pulverised-the.jpg" alt="">

            <h3 class="newh1fordiv">A studious rise: the making of Venkatesh Iye</h3>
            <p class="time1">The people behind the rise of KKR's newest star shed light on a calm-headed boy and a
                batting powerhouse</p>
            <img width="330px" class="imgdivand"
                src="https://www.cricbuzz.com/a/img/v1/300x170/i1/c219450/it-was-him-trying-to-attain-a.jpg" alt="">
            <h3 class="newh1fordiv">Getting into the rhythm of Test cricket - The Steve Smith way</h3>
            <p class="time1">Australia have made the most of the last few days leading into the first Ashes Test,
                even
                if the Brisbane weather hasn't played ball at times</p>
            <img width="330px" class="imgdivand"
                src="https://www.cricbuzz.com/a/img/v1/300x170/i1/c219451/root-and-stokes-are-different.jpg" alt="">
            <h4 class="newh1fordiv">Root and Stokes - Two best mates set to live their dream</h4>
            <p class="time1"> The bond between the captain and vice-captain has strengthened over the years and
                their
                form will be the key to England's success in the Ashes</p>
            <div class="line"></div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="module" src="./main.js"></script>

    <div id="footer"></div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>