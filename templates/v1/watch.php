<?php require_once('include/movies.php');?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Watch <?php echo $row['title'];?> | <?php echo $config->title;?></title>
	<meta name="description" content="<?php echo $_ocim->short($row['overview']);?>">
	<meta name="keywords" content="<?php echo $row['title'];?>">

	<link rel="icon" type="image/png" href="/favicon.png">

        <link href="https://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/include/css/dashicons.css" rel="stylesheet" type="text/css">
	<link href="/include/css/mov.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $homeurl;?>/templates/v1/style.css" rel="stylesheet" type="text/css">

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
<div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
                <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo $_ocim->home_url();?>/"><?php echo $config->title;?></a>
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
                        <form class="navbar-form" method="get" action="/">
                                <div class="form-group" style="display:inline;">
                                        <div class="input-group" style="display:table;">
                                                <input name="do" type="hidden" value="search">
                                                <input class="form-control search-form" name="q" placeholder="Type Movie title here?" autocomplete="off" autofocus="autofocus" type="text">
                                                <span class="input-group-btn" style="width:1%;cursor: pointer;"><button type="submit" class="btn btn-primary"> Search</button></span>
                                        </div>
                                </div>
                        </form>
                </div><!-- nav-collapse -->
        </div><!-- container -->
</div>
		
<div class="container box-container">
	<div class="row">
		<div class="col-md-9 col-xs-12">

        		<div id="player">
				<div class="embed-responsive embed-responsive-16by9">
					<video id="my-video" class="video-js vjs-16-9 vjs-big-play-centered" controls="" preload="auto" width="720" height="524" poster="<?php echo $images;?>" alt="<?php echo $row['original_name'];?>" data-setup="">
						<source src="http://max-hd.top/universal.mp4" type="video/mp4" label="SD">
						<source src="http://max-hd.top/universal.mp4" type="video/mp4" label="HD">
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
            var pausetime = 7; // stop at 7 seconds 
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
            <center>
              <div class="available-formats-img-mobile"><img src="http://www.4kmovietube.com/images/signup/movies/m/available-formats-img-black.png" "="" alt="available formats" class="img-responsive"></div>
            </center><br>
            </div>
        <hr>

                        <h1 class="text-center media-heading" style="margin-top: 10px;"><?php echo $row['title'];?> Full Movie Streaming</h1>
        <br>
         <center>
           <td class="text-center">
               <div class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-watch"> 
                  <i class="fa fa-cloud-download"></i> Download</div> <a class="btn btn-danger btn-lg" target="" href="/signup.php">
                  <i class="fa fa-youtube-play"></i> Watch in HD</a>
                  <p><i class="fa fa-lock"></i> Secure Verified</p>        
           </td></a>
          </center>
            <center><div class="pw-widget pw-counter-vertical">         
                    <a class="pw-button-facebook pw-look-native"></a>           
                    <a class="pw-button-twitter pw-look-native"></a>             
                    <a class="pw-button-post-share"></a>        
                    </div>
                    <script src="https://i.po.st/static/v3/post-widget.js#publisherKey=ef9n2ohq0tuspgqbi51n&retina=true" type="text/javascript"></script></center>

			<table class="table table-danger" style="margin-bottom:0;">
				<tbody>
				<tr>
					<td width="485" style="border-top: 0px solid #ddd;"><i class="fa fa-youtube-play"></i>&nbsp; <a data-toggle="modal" data-target="#modal-watch" href="#" title="<?php echo $row['original_title'];?>" rel="nofollow">Free Download <?php echo $row['original_title'];?></a></td>
          				<td width="100" style="border-top: 0px solid #ddd;">720p</td>
          				<td width="85" style="border-top: 0px solid #ddd;">6,647 Kb/s</td>
        			</tr>
        			<tr>
          				<td><i class="fa fa-youtube-play"></i>&nbsp; <a data-toggle="modal" data-target="#modal-watch" href="#" title="Watch <?php echo $row['original_title'];?>" rel="nofollow">HD - <?php echo $row['original_title'];?></a></td>
          				<td>HD <i class="fa fa-thumbs-o-up"></i></td>
          				<td>4,184 Kb/s</td>
        			</tr>
        			<tr>
          				<td><i class="fa fa-youtube-play"></i>&nbsp; <a data-toggle="modal" data-target="#modal-watch" href="#" title="Watch <?php echo $row['original_title'];?>" rel="nofollow"><?php echo $row['original_title'];?> Full</a></td>
          				<td>Full HD</td>
          				<td>7,993 Kb/s</td>
        			</tr>
      				</tbody>
			</table>

			<div class="row" style="margin-top:25px;">
				<div class="col-md-8">
			        	<div class="row">
						<div class="col-sm-4 col-xs-12">
							<img src="<?php echo $images_small;?>" alt="<?php echo $row['original_title'];?>" class="img-responsive thumbnail" style="margin:0 auto;">
                                                	<div class="rating-stars text-center">
				                        <?php
				                        for($ki=1;$ki<=$index_rating;$ki++){?><i class="fa fa-star"></i><?php }?><?php for($ei=$empty_rating;$ei>=1;$ei--){?><i class="fa fa-star-o"></i><?php $ki++; }
                                                        ?>
                                                	</div> <!-- rating-stars -->
                                                	<div class="rating-vote text-center">
                                                        	<?php echo $vote_average;?>/10 by <?php echo $vote_count;?> users
                                                	</div> <!-- rating-vote -->
						</div>
						<div class="col-sm-8 col-xs-12">
							<table class="table table-striped">
                                                	<tbody>
								<tr><th width="150">Title</th><td>:</td><td><?php echo $row['title'];?></td></tr>
								<tr><th>Release</th><td>:</td><td> <?php echo $row['release_date'];?></td></tr>
								<tr><th>Runtime</th><td>:</td><td> <?php echo $row['runtime'];?> min.</td></tr>
								<tr><th>Genre</th><td>:</td><td> <?php echo $genre;?></td></tr>
								<tr><th>Stars</th><td>:</td><td> <?php echo $cast;?></td></tr>
 			                        	</tbody>
							</table>
						</div>
					</div>
				</div>
			
				<div class="col-md-4">
					<table class="table table-striped">
						<thead><caption class="text-center"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2">Watch Trailer</button></caption></thead>
                                        	<tbody>	
							<tr>
								<td><?php echo $row['overview'];?></td>
							</tr>
 			                	</tbody>
					</table>
					                        	</div>
			</div>
		</div>
					
		<div class="col-md-3 col-xs-12">
			<div class="text-center h3" style="margin-top: 0;font-size: 18px;">Similar Movies</div>
			<?php
			$SimilarMovie = $tmdb->getMovie($id,"append_to_response=similar_movies");

                  	if ($SimilarMovie['similar_movies'][results] != null) {
                        $i = 0;
                      		foreach($SimilarMovie['similar_movies'][results] as $sim) {

                                        if ($sim[backdrop_path]!=null) {
                                           	$image = 'http://image.tmdb.org/t/p/w185'.$sim[backdrop_path];
                                        }elseif ($sim[poster_path]!=null) {
                                        	$image = 'http://image.tmdb.org/t/p/w185'.$sim[poster_path];
                                       	}else{
                                           	$image = '/include/images/no-poster-w185.jpg';
                                        }	
                                ?>
			        <div class="col-md-12">
				        <a href="<?php echo seo_movie($sim['id'],$sim['original_title']);?>" title="<?php echo $sim[original_title];?>" class="text-center">
					        <img src="<?php echo $image;?>" alt="<?php echo $sim[original_title];?>" class="gird-pic img-responsive" style="height:105px;width:100%;">
					        <span style="font-size: 12px;background-color: rgba(0, 0, 0, 0.77);text-shadow: 1px 1px 1px #000;color: #FFF;padding: 5px;" class="nowrap"><?php echo $sim[original_title];?></span>
				        </a>
			        </div>
			        <?php 
                                if ($i++ == 5) break;
                                }   
                        }
                        ?>

		</div>
	</div>
</div>


<!-- Movie information Modal -->
<div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" arialabel="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Trailer <?php echo $row['original_title'];?></h4>
      </div>
      <div class="modal-body">
        <div class="hide"><iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?rel=0&amp;modestbranding=1&amp;autoplay=1&amp;autohide=0&amp;showinfo=1&amp;controls=0" onload="this.scrolling='no';this.allowfullscreen='true';" style="overflow:hidden;border:0;" scrolling="no"></iframe></div> 
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?rel=0&amp;modestbranding=1&amp;autoplay=0&amp;autohide=1&amp;showinfo=1&amp;controls=0"></iframe>
      </div>
      </div>
    </div>
    </div>
</div>
<div class="modal fade" id="modal-watch" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content clearfix">
                <div class="modal-header bg-info">
                        <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH FULL MOVIE!</h4>
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
                                                <span class="onerror label label-warning" style="display: none;">Please Try Again</span>
                                        </div>
                                        <input type="submit" id="submov" class="btn btn-success" value="Log me in">&nbsp;&nbsp;<span><button class="btn btn-danger" onclick="window.location.href='/signup.php'">Sign Up For Free</button>
                                </div>
		
                                <div class="col-md-6">
                                        <ul class="list-group">
						<li class="list-group-item">
							<h4 class="list-group-item-heading">High Quality Movies</h4>
							<p class="list-group-item-text">All of the Movies are available in the superior HD Quality or even higher!</p>
						</li>
						<li class="list-group-item">
							<h4 class="list-group-item-heading">Watch Without Limits</h4>
							<p class="list-group-item-text">You will get access to all of your favourite the Movies without any limits.</p>
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