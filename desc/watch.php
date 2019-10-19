<?php 
require_once('../config.php');
require_once('../include/movies.php');
$longurl= $_ocim->home_url() .'/?do=watch&id='. $id ;
$short = seo_movie($id,$row['title']);
function bit_ly_short_url($url, $format='txt') {
    $login = "o_2pt6sqknqh";
    $appkey = "R_cb4cdac1b4ff479686a5f3b814a0ec55";
    $bitly_api = 'http://api.bit.ly/v3/shorten?login='.$login.'&apiKey='.$appkey.'&uri='.urlencode($url).'&format='.$format;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$bitly_api);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $row['title'];?> (<?php echo $omdbapi['Year'];?>)</title>
	<meta name="description" content="<?php echo $_ocim->short($row['overview']);?>">
	<meta name="keywords" content="<?php echo $keywords;?>">

	<link rel="icon" type="image/png" href="/favicon.png">

        <link href="//fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

	<link href="/include/css/dashicons.css" rel="stylesheet" type="text/css">
	<link href="/include/css/mov.css" rel="stylesheet" type="text/css">
	<link href="/include/css/style.css" rel="stylesheet" type="text/css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function selectText(obj) {      // adapted from Denis Sadowski (via StackOverflow.com)
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(obj);
                range.select();
            }
            else if (window.getSelection) {
                var range = document.createRange();
                range.selectNode(obj);
                window.getSelection().addRange(range);
            }
        }
    </script>
</head>
<body>
	<nav class="navbar navbar-custom navbar-static-top" role="navigation">
		<div class="row">
                    <div class="col-md-5 item">
                    <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div>
                </div>
                </div>   
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle navbar-default" data-toggle="collapse" data-target="#togglenav">
					<span class="sr-only"></span>
					<i class="fa fa-align-justify"></i>
				</button>
				<a class="navbar-brand" href="<?php echo $_ocim->home_url();?>/"><i class="fa fa-film"></i> <?php echo $config->title;?></a>
			</div>
			<div class="collapse navbar-collapse" id="togglenav">
				<form class="navbar-form navbar-left hidden-sm" role="search" action="/desc/search.php" method="GET">
					<div class="form-group">
						<input type="text" name="q" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
				</form>
					
				<ul class="nav navbar-nav navbar-left navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-film"></i> Movie <span class="caret"></span>
						</a>
                                                <ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo $_ocim->home_url();?>/desc/"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/playing"><i class="fa fa-dot-circle-o"></i> Now Playing</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/toprated"><i class="fa fa-list-alt"></i> Top Rated</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/upcoming"><i class="fa fa-star-half-o"></i> Upcoming</a></li>
                                                </ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-file-video-o"></i> TV Show<span class="caret"></span>
						</a>
                                                <ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo $_ocim->home_url();?>/desc/tv"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/airing"><i class="fa fa-dot-circle-o"></i> TV shows Airing</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/ontheair"><i class="fa fa-list-alt"></i> On the Air</a></li>
							<li><a href="<?php echo $_ocim->home_url();?>/desc/popular"><i class="fa fa-star-half-o"></i> Popular TV Series</a></li>
                                                </ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>		
		
	<div class="container box-container">

		<div class="row">

		<div class="col-md-12">

			<div class="choice-menu">
				<a class="btn btn-success" href="/">Home</a>
				<a class="btn btn-primary active" href="./">Description</a>
			</div>

			<h1 class="text-center media-heading"><?php echo $row['title'];?> (<?php echo $omdbapi['Year'];?>)</h1>

			<div class="row" style="margin-top:25px;">
			<div class="col-md-12">
			        <div class="row">
				<div class="col-sm-4 col-xs-12">
					<img src="<?php echo $images_small;?>" alt="<?php echo $row['title'];?> (<?php echo $omdbapi['Year'];?>)" class="img-responsive thumbnail" style="margin:0 auto;">
                                        <div class="text-center">
                                                <label>Ambil Gambar Besar Disini</label>
                                                <textarea class="form-control"><?php echo $images;?></textarea>
                                                <label>Ambil Gambar Kecil Disini</label>
                                                <textarea class="form-control"><?php echo $images_small;?></textarea>

                                        </div>

				</div>
				<div class="col-sm-8 col-xs-12">
					<table class="table table-striped">
                        	<tbody>
								<tr><th>URL Movie:</th><td>:</td><td> <?php echo $short;?></td></tr>
								<tr><th>Short Link:</th><td>:</td><td> <?php echo bit_ly_short_url($longurl) ?></td></tr>
 			            	</tbody>
					</table>
					
				</div>
				<div class="col-sm-8 col-xs-12">
				<table class="table table-striped">
                       <tbody>
							<tr><th>Deskripsi I</th><td>:</td><td> <?php echo $row['title'];?> (<?php echo $omdbapi['Year'];?>) Full Movie Streaming Online<br>Watchnow ☛ <?php echo bit_ly_short_url($longurl) ?> </tr>
							<tr><th>Deskripsi II</th><td>:</td><td> Please visit this link if you want watch <?php echo $row['title'];?> (<?php echo $omdbapi['Year'];?>) Full Movie Streaming Online<br>Watchnow ☛ <?php echo bit_ly_short_url($longurl) ?><br>100% guaranteed to be safe and has been verified. Enjoy watching.</td></tr>
							<tr><th>Deskripsi III</th><td>:</td><td> Just finished watching <?php echo $row['title'];?> (<?php echo $omdbapi['Year'];?>) Full Movie Streaming Online here<br>Watchnow ☛ <?php echo bit_ly_short_url($longurl) ?> <br> Come watch here. 100% full original video. </tr>
							<tr><th>Deskripsi IV</th><td>:</td><td> Only here you can get the original link alternative, to watch <?php echo $row['title'];?> (<?php echo $omdbapi['Year'];?>) Full Movie Streaming Online here<br>Watchnow ☛ <?php echo bit_ly_short_url($longurl) ?> <br> Let's get it now. do not miss this.. </tr>
							<tr><th>Deskripsi V</th><td>:</td><td> Everyone can watch or download <?php echo $row['title'];?> (<?php echo $omdbapi['Year'];?>) Full Movie Streaming Online here<br>Watchnow ☛ <?php echo bit_ly_short_url($longurl) ?> <br> 100% working. Guaranteed safe. </tr>
 			          	</tbody>
 			          	
				</div>
				</div>
			</div>
			
			</div>
		</div>

		</div>
	</div>
<?php include('footer.php');?>