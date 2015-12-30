<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Socialiko</title>
  <link rel="stylesheet" type="text/css" href="<?=URL?>/Public/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?=URL?>/Public/Files/Emotions Template/jquery.emotions.fb.css">
  <?php if(isset($this->styles)): ?>
    <?php foreach ($this->styles as $style): ?>
        <link rel="stylesheet" type="text/css" href="<?=$style?>">
    <?php endforeach; ?>
  <?php endif; ?>
  <script src="<?=URL?>/Public/bootstrap/js/smiles.js"></script>
  <script src="<?=URL?>/Public/Files/Emotions Template/jquery.emotions.js"></script>
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" rel="home" href="/" title="Aahan Krish's Blog - Homepage">Socialiko</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">

      <div class="col-sm-3 col-md-3">
        <form class="navbar-form" action="<?=URL?>/post/search" method="get">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="val" id="srch-term">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
          </div>
        </form>
      </div>

      <ul class="nav navbar-nav pull-right">
        <li><a href="<?=URL?>/post/newsfeed">Home</a></li>
        <li><a href="<?=URL?>/post/index">Profile</a></li>
        <li><a href="<?=URL?>/friend_request/index">Friend Requests
          <?php
            require_once('Controllers/friend_request.php');
            echo friend_request::getFriendRequestsCount()['0']['cnt'];
            ?>
          </a>
        </li>
        <li><a href="<?=URL?>/friend/getFriends">Friends</a></li>
        <li><a href="<?=URL?>/notification">Notifications</a></li>
        <li><a href="<?=URL?>/login/logout">Sign out</a></li>
      </ul>
    </div>
  </div>
  <div class="container">