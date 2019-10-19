<?php require_once('include/tvseries.php');?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Watch <?php echo $row['name'];?><?php echo $movie_title;?> Full Streaming Online</title>
    <meta name="description" content="<?php echo $_ocim->short($row['overview']);?>">
    <meta name="keywords" content="<?php echo $keywords;?>">

    <link rel="icon" type="image/png" href="/favicon.png">

        <link href="https://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="/include/css/dashicons.css" rel="stylesheet" type="text/css">
    <link href="/include/css/mov.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $homeurl;?>/templates/v2/style.css" rel="stylesheet" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" type="text/javascript"></script>
    <script src="/include/js/css3-mediaqueries.js" type="text/javascript"></script>

        <link href="/include/css/video-js.css" rel="stylesheet">
    <script src="/include/css/videojs-ie8.min.js"></script>
    <script src="/include/css/video.js"></script>
    <script src="/include/css/resolution-switcher.js"></script>
    <link href="/include/css/resolution-switcher.css" rel="stylesheet">
    <link href="/include/css/videojs-overlay.css" rel="stylesheet">
    <script src="/include/css/videojs-overlay.min.js"></script>  
    <script src="/include/css/videojs.disableProgress.js"></script>
<script type="text/javascript"> var SPklikkanan = 'TILANG';</script> <script type="text/javascript" src="/include/js/sp-tilang.js"></script>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
        <script src="https://oss.maxcdn.com/respond/1.3/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-default navbar-static-top">
        <div class="container">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo $_ocim->home_url();?>/"><i class="fa fa-film"></i> <?php echo $config->title;?></a>
                </div><!-- navbar-header -->
                <div class="navbar-collapse collapse" id="searchbar">
                        <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-film"></i> Movie <span class="caret"></span>
                        </a>
                                                <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo $_ocim->home_url();?>/"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="<?php echo $_ocim->home_url();?>/playing"><i class="fa fa-dot-circle-o"></i> Now Playing</a></li>
                            <li><a href="<?php echo $_ocim->home_url();?>/toprated"><i class="fa fa-list-alt"></i> Top Rated</a></li>
                            <li><a href="<?php echo $_ocim->home_url();?>/upcoming"><i class="fa fa-star-half-o"></i> Upcoming</a></li>
                                                </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-file-video-o"></i> TV Show<span class="caret"></span>
                        </a>
                                                <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo $_ocim->home_url();?>/airing"><i class="fa fa-dot-circle-o"></i> TV shows Airing</a></li>
                            <li><a href="<?php echo $_ocim->home_url();?>/ontheair"><i class="fa fa-list-alt"></i> On the Air</a></li>
                            <li><a href="<?php echo $_ocim->home_url();?>/popular"><i class="fa fa-star-half-o"></i> Popular TV Series</a></li>
                                                </ul>
                    </li>
                                <li>&nbsp;</li>
                        </ul>
                        <form class="navbar-form" method="get" action="/search.php">
                                <div class="form-group" style="display:inline;">
                                        <div class="input-group" style="display:table;">
                                                <input class="form-control search-form" name="q" placeholder="Type Movie title here?" autocomplete="off" autofocus="autofocus" type="text">
                                                <span class="input-group-btn" style="width:1%;cursor: pointer;"><button type="submit" class="btn btn-primary"> Search</button></span>
                                        </div>
                                </div>
                        </form>
                </div><!-- nav-collapse -->
        </div><!-- container -->
</div>
<div class="row">
                    <center><div class="col-md-5 item">
                    <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>
                </div>
                </div></center>         
<div class="container box-container">

    <div class="row">

        <div class="col-md-12">

                <div id="player">
                <div class="embed-responsive embed-responsive-16by9">
                    <video id="my-video" class="video-js vjs-16-9 vjs-big-play-centered" controls="" preload="auto" width="720" height="524" poster="<?php echo $images;?>" alt="<?php echo $row['original_name'];?>" data-setup="">
                        <source src="/series_netflix.mp4" type="video/mp4" label="SD">
                        <source src="/series_netflix.mp4" type="video/mp4" label="HD">
                        <track kind="subtitles" src="" srclang="en" label="English">
                        <track kind="subtitles" src="" srclang="en" label="tiếng Việt">
                        <track kind="subtitles" src="" srclang="en" label="French">
                        <track kind="subtitles" src="" srclang="en" label="Germany">
                        <track kind="subtitles" src="" srclang="en" label="Netherland">
                        <track kind="subtitles" src="" srclang="en" label="Italy">
                        <track kind="subtitles" src="" srclang="en" label="Svenska">
                        <track kind="subtitles" src="" srclang="en" label="Norsk">
                        <track kind="subtitles" src="" srclang="en" label="Arabic">
                    </video>
<script>
videojs('my-video').videoJsResolutionSwitcher();
limitload = 0;
</script>
<script>
            var myPlayer = videojs('my-video', {"fluid": true, ControlBar: {
                DurationDisplay: true}
            });
            var pausetime = 9; // stop at 9 seconds 
            myPlayer.on('timeupdate', function(e) {
                if (myPlayer.currentTime() >= pausetime) {
                    myPlayer.pause();
                    $('#modal-watch').modal({show: true, backdrop: 'static'});
                    
                    myPlayer.exitFullscreen();
                }
            });
            myPlayer.disableProgress({
                autoDisable: true
            });            
            
</script>
                </div>
                </div>
      <div class="row" style="margin-top:25px;">
                
                        <center></br><div class="available-formats-img-mobile"><img src="https://tvshowst.tvmuse.biz:443/include/images/4khd.png" class="img-responsive"> </div></center>
                </div>

            <h4 class="text-center media-heading" style="margin-top: 10px;">Watch <?php echo $row['name'];?><?php echo $movie_title;?> Full Streaming</h4>
            <table class="table">
                <div><tbody>    
                    
                        <td class="text-center"><div class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-watch"> <i class="fa fa-cloud-download"></i> Download</div> <a class="btn btn-danger btn-lg" target="" href="<?php echo $_ocim->home_url();?>/signup.php"><i class="fa fa-youtube-play"></i> Watch Now </a><p><i class="fa fa-lock"></i> Secure Verified</p></td>
                    
                </tbody>
                </div>
            </table>
<!-- AddToAny BEGIN -->
<a class="a2a_dd" href="https://www.addtoany.com/share"><img src="https://static.addtoany.com/buttons/share_save_256_24.png" width="256" height="24" border="0" alt="Share"/></a>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->

            <table class="table table-danger" style="margin-bottom:0;">
                <tbody>
                <tr>
                    <td width="485" style="border-top: 0px solid #ddd;"><i class="fa fa-youtube-play"></i>&nbsp; <a data-toggle="modal" data-target="#modal-watch" href="#" title="<?php echo $row['name'];?><?php echo $movie_title;?>" rel="nofollow">Free Download <?php echo $row['name'];?><?php echo $movie_title;?></a></td>
                        <td width="100" style="border-top: 0px solid #ddd;">720p</td>
                        <td width="85" style="border-top: 0px solid #ddd;">6,647 Kb/s</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-youtube-play"></i>&nbsp; <a data-toggle="modal" data-target="#modal-watch" href="#" title="Watch <?php echo $row['name'];?><?php echo $movie_title;?>" rel="nofollow">HD - <?php echo $row['name'];?><?php echo $movie_title;?></a></td>
                        <td>HD <i class="fa fa-thumbs-o-up"></i></td>
                        <td>4,184 Kb/s</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-youtube-play"></i>&nbsp; <a data-toggle="modal" data-target="#modal-watch" href="#" title="Watch <?php echo $row['name'];?><?php echo $movie_title;?>" rel="nofollow"><?php echo $row['name'];?><?php echo $movie_title;?> Full</a></td>
                        <td>Full HD</td>
                        <td>7,993 Kb/s</td>
                    </tr>
                    </tbody>
            </table>

        <ul class="nav nav-tabs" style="margin-top:25px;">
            <li class="active"><a data-toggle="tab" href="#sectionA">Film Info</a></li>
            <li><a data-toggle="tab" href="#sectionB">Season List</a></li>
            <?php if (!$_id[2] AND $row2 != null ):?><li><a data-toggle="tab" href="#sectionC">Episode List</a></li><?php endif;?>
    </ul>

    <div class="tab-content">
            <div id="sectionA" class="tab-pane fade in active">
            <div class="row" style="margin-top:25px;">
            <div class="col-md-12">
                    <div class="row">
                <div class="col-sm-3 col-xs-12">
                    <img src="<?php echo $images_small;?>" alt="<?php echo $row['original_name'];?><?php echo $movie_title;?>" class="img-responsive thumbnail" style="margin:0 auto;">
                                                <div class="rating-stars text-center">
                                        <?php
                                        for($ki=1;$ki<=$index_rating;$ki++){?><i class="fa fa-star"></i><?php }?><?php for($ei=$empty_rating;$ei>=1;$ei--){?><i class="fa fa-star-o"></i><?php $ki++; }
                                                        ?>
                                                </div> <!-- rating-stars -->
                                                <div class="rating-vote text-center">
                                                        <?php echo $vote_average;?>/10 by <?php echo $vote_count;?> users
                                                </div> <!-- rating-vote -->
                </div><!-- col-sm-3 -->
                <div class="col-sm-9 col-xs-12">
                    <table class="table table-striped">
                                                <tbody>
                            <tr><th width="150">Title</th><td>:</td><td><?php echo $row['name'];?></td></tr>
                            <tr><th>Genre</th><td>:</td><td> <?php echo $genre;?></td></tr>
                                                        <?php if ($_id[2] != null):?>
                                                        <tr>
                                                                <th>Air Date</th><td>:</td>
                                                                <td><?php echo $row3['air_date'];?></td>
                                                        </tr>
                                                        <tr>
                                                                <th>Season Number</th><td>:</td>
                                                                <td><?php echo $row3['season_number'];?></td>
                                                        </tr>
                                                        <tr>
                                                                <th>Episodes Number</th><td>:</td>
                                                                <td><?php echo $row3['episode_number'];?></td>
                                                        </tr>
                                                        <?php elseif ($_id[1] != null): ?>
                                                        <tr>
                                                                <th>Air Date</th><td>:</td>
                                                                <td><?php echo $row2['air_date'];?></td>
                                                        </tr>
                                                        <tr>
                                                                <th>Season Number</th><td>:</td>
                                                                <td><?php echo $row2['season_number'];?></td>
                                                        </tr>
                                                        <tr>
                                                                <th>Total Episodes</th><td>:</td>
                                                                <td><?php echo $episodec;?></td>
                                                        </tr>
                                                        <?php else: ?>
                            <tr><th>First Air Date</th><td>:</td><td> <?php echo $row['first_air_date'];?></td></tr>
                            <tr><th>Last Air Date</th><td>:</td><td> <?php echo $row['last_air_date'];?></td></tr>
                            <tr><th>Number of Seasons</th><td>:</td><td> <?php echo $row['number_of_seasons'];?></td></tr>
                            <tr><th>Number of Episodes</th><td>:</td><td> <?php echo $row['number_of_episodes'];?></td></tr>
                            <tr><th>Runtime</th><td>:</td><td> <?php echo $row['episode_run_time'][0];?> min</td></tr>
                                                        <?php endif;?>
                            <tr><th>Overview</th><td>:</td><td> <?php echo $overview;?></td></tr>
                            <tr><th>Stars</th><td>:</td><td> <?php echo $cast;?></td></tr>
                                    </tbody>
                    </table>
                </div><!-- col-sm-9 -->
                </div><!-- row -->
            </div><!-- col-md-12 -->
            
            </div><!-- row -->
        </div><!-- sectionA  -->

        <div id="sectionB" class="tab-pane fade" style="padding-bottom:25px;">
                        <div class="list-group" style="margin-top: 10px;">
                        <?php 
                        if ($row['seasons']!=null) { 
                        foreach($row['seasons'] as $resultseasons) {
                        if( $resultseasons['season_number'] == 0 ) {
                                continue;
                        }
                        ?>
                <a class="list-group-item" href="<?php echo seo_tv($row[id].'-'.$resultseasons['season_number'],$row[original_name]);?>" itemprop="season" itemscope itemtype="http://schema.org/TVSeason">
                    <span class="badge"><?php echo date('F d, Y', strtotime($resultseasons['air_date']));?></span>
                                        <span itemprop="name">Season <?php echo $resultseasons['season_number'];?></span> 
                                        <span class="label label-info"><?php echo $resultseasons['episode_count'];?> Episodes</span>    
                </a>        
                        <?php 
                        }
                        }
                        ?>
            </div>
        </div><!-- sectionB  -->

            <?php if (!$_id[2] AND $row2 != null ):?>
        <div id="sectionC" class="tab-pane fade">
        <div class="col-md-12">
        <h3 class="text-center">All Episodes on season <?php echo $row2['season_number'];?></h3>
            <?php
                    if ($row2['episodes']!=null) {
                            foreach( $row2['episodes'] as $episodes) {

                                        if ($episodes['still_path']!=null) {
                                            $still_path = 'http://image.tmdb.org/t/p/w185'.$episodes['still_path'];
                                        }else{
                                            $still_path = '/include/images/no-backdrop.png';
                                        }   
                            ?>
                <div class="col-md-4 col-sm-6 col-xs-12 media">
                                        <div class="media-left">
                        <a href="<?php echo seo_tv($row[id].'-'.$row2['season_number'].'-'.$episodes['episode_number'],$row[original_name]);?>" title="<?php echo $episodes['name'];?>"><img src="<?php echo $still_path;?>" alt="<?php echo $episodes['name'];?>" class="media-object" style="min-height:85px;max-height:85px;"></a>
                            </div>
                                        <div class="media-body">
                        <h4 class="media-heading" style="font-size: 14px;font-weight: 700;"><a href="<?php echo seo_tv($row[id].'-'.$row2['season_number'].'-'.$episodes['episode_number'],$row[original_name]);?>" title="<?php echo $episodes['name'];?>">Episode <?php echo $episodes['episode_number'];?> : <?php echo $episodes['name'];?></a></h4>
                        <div style="font-size:11px;"><?php echo date('F d, Y', strtotime($episodes['air_date']));?></div>
                            </div>

                </div>
                <?php 
                                }   
                        }
                        ?>
        </div>
            </div><!-- sectionC  -->
            <?php endif;?>
    </div><!-- tab-content  -->
<div class="panel-footer">
                              <div class="row">
                          <div id="fbFeedbackContent">
                            <p align="right">
                            <strong>72 Comments </strong> <a href="#">Comment</a><hr/>
                            </p> 
                            <ul>
                              <li>
                                <a class="image">
                                <img class="img" src="/include/images/fb12.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Andrea Soon Keefer</a> <span></span>
                                <p>I was suspicious at first when I got redirected to the membership site. Now I'm really excited I found this Power Season 4 Episode 2 : Things Are Going To Get Worse online movie streaming....many thanks Kisses</p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> · <a class="like"><i></i> 258</a> · <a>Like</a> · <a>Follow</a> · 1 hour ago                                  </div>
                                </div>
                              </li>
                                            <li>
                                <a class="image">
                                <img class="img" src="/include/images/fb13.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">May Andreassen Malmberg</a> <span></span>
                                <p> wtffff i do not understand this! </p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> · <a class="like"><i></i> 23</a> · <a>Like</a> · <a>Follow</a> · 8 hour ago                                  </div>
                                </div>
                                <ul>
                                  <li>
                                    <a class="image">
                                    <img class="img" src="/include/images/fb14.jpg" alt="">
                                    </a>
                                    <div class="postContainer">
                                    <a href="#">Carrie Hoye</a>
                                    <p>Just click on the download, watch now or start a free trial buttons and create an account. It only takes 5 minutes to start your one month trial, and after you can download not just this Movie but many others ;) </p>
                                    <div class="bottom">
                                    <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> · <a class="like"><i></i> 138</a> · <a>Like</a> · <a>Follow</a> · 7 hour ago                                      </div>
                                    </div> 
                                  </li>                                   
                                  <li>
                                    <a class="image">
                                    <img class="img" src="/include/images/fb15.jpg" alt="">
                                    </a>
                                    <div class="postContainer">
                                    <a href="#">Stephanie Maguire Hamilton</a>
                                    <p>lol it did not even take me 5 minutes at all! XD</p>
                                    <div class="bottom">
                                    <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> · <a class="like"><i></i> 121</a> · <a>Like</a> · <a>Follow</a> · 6 hour ago                                          </div>
                                    </div>                                                                      
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="/include/images/fb16.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Bree Robinson</a> <span></span>
                                <p>Amazing review for an amazing movie. Well done, thanks for all these Power Season 4 Episode 2 : Things Are Going To Get Worse TV Series Finally I get this, I can get now!</p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> · <a class="like"><i></i> 89</a> · <a>Like</a> <a>Follow</a> 1 hour ago                                  </div>
                                </div>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="/include/images/fb17.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Amberscott Wilcoxson</a>
                                <p>I did not think that this would work, my best friend showed me this website, and it does! I get Power Season 4 Episode 2 : Things Are Going To Get Worse full movie                                  </p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> · <a class="like"><i></i> 64</a> · <a>Like</a> · <a>Follow</a> · 1 hour ago                                  </div>
                                </div>
                                <ul>
                                  <li>
                                    <a class="image">
                                    <img class="img" src="/include/images/fb18.jpg" alt="">
                                    </a>
                                    <div class="postContainer">
                                    <a href="#">Laura Jackson</a>
                                    <p>I found out about this website from the IMDB and I'm very happy about it: “After Become Member from this site, I have Awesome offers music, games, TV shows, movies and e-books through its service.”                                       </p>
                                    <div class="bottom">
                                    <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> · <a class="like"><i></i> 59</a> · <a>Like</a> · <a>Follow</a> · 48  minutes ago                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="/include/images/fb19.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Lo Uí Ghliasáin</a> <span></span>
                                <p>My friends are so mad that they do not know how I have all the high quality this Movie  which they do not!                                  </p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> · <a class="like"><i></i> 42</a> · <a>Like</a> · <a>Follow</a> · 3 hour ago                                  </div>
                                </div>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="/include/images/fb20.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Codie Paul</a> <span></span>
                                <p>Enjoy it for High Quality Movie. Great service.</p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> · <a class="like"><i></i> 34</a> · <a>Like</a> · <a>Follow</a> · 3 hour ago                                  </div>
                                </div>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="/include/images/fb21.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">David Edwards Jr.</a> <span></span>
                                <p>hahahahaha</p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> · <a class="like"><i></i> 29</a> · <a>Like</a> · <a>Follow</a> · 5 hour ago                                  </div>
                                </div>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="/include/images/fb22.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Chris Thacker</a> <span></span>
                                <p>so many fake sites. this is the first one which worked! Many thanks </p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> · <a class="like"><i></i> 25</a> · <a>Like</a> · <a>Follow</a> · 6 hour ago                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                      </div>
                      
                          <div class="row">
                          <center>                        
                          <br/> 
                          <center><h5><font color="green"><strong>Click the button below to register a free account and download the file</strong></font></h5></center>
                      <br/>
<div class="btn btn-lg">
<a class="btn btn-primary btn-lg" target="_blank" href="/signup.php"><i class="fa fa-cloud-download"></i> REGISTER NOW</a>
</div>
                          </center><br/>

<center><p>DISCLAIMER: "We cannot guarantee the availability of this TV Series on an external site."</p></center>
                        </div>   
                        </div>



    
</div>
</div>
<div class="modal fade" id="modal-watch" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content clearfix">
                <div class="modal-header bg-info">
                        <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH FULL TV SERIES!</h4>
                </div>
                <div class="modal-body clearfix">
                        <div class="row">
                                <div class="col-md-6" id="login">
                                        <img class="img-responsive" src="<?php echo $images;?>">
                                        <hr>
                                        <h5>Member Login</h5>
                                        <div class="form-group">
                                                <input type="text" class="form-control input-sm" id="userid" placeholder="username">
                                    </div>
                                        <div class="form-group">
                                                <input type="password" class="form-control input-sm" id="password" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                                <span class="onload label label-info" style="display: none;">Please wait...</span>
                                                <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span>
                                        </div>
                                        <input type="submit" id="submov" class="btn btn-success" value="Log me in">&nbsp;&nbsp;<span><button class="btn btn-danger" onclick="window.location.href='/signup.php'">Sign Up For Free</button>
                                </div>
        
                                <div class="col-md-6">
                                        <ul class="list-group">
                        <li class="list-group-item">
                            <h4 class="list-group-item-heading">High Quality TV Series</h4>
                            <p class="list-group-item-text">All of the TV Series are available in the superior HD Quality or even higher!</p>
                        </li>
                        <li class="list-group-item">
                            <h4 class="list-group-item-heading">Watch Without Limits</h4>
                            <p class="list-group-item-text">You will get access to all of your favourite the TV Series without any limits.</p>
                        </li>
                        <li class="list-group-item">
                            <h4 class="list-group-item-heading">100% Free Advertising</h4>
                            <p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p>
                        </li>
                        <li class="list-group-item">
                            <h4 class="list-group-item-heading">Watch anytime, anywhere</h4>
                            <p class="list-group-item-text">It works on your TV, PC, or MAC!</p>
                        </li>                           
                    </ul>
                                </div>
                        </div>
                </div>
        </div>
</div>
<?php include('footer.php');?>