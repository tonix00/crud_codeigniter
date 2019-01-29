<!DOCTYPE html>
<!--[if lt IE 9]>
<html lang="ja" class="no-js lt-ie9" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="ja" class="no-js" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>{title}</title>
    <meta name="description" content="sample text,sample tex">
    <meta name="keywords" content="word1,word2,word3">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="">
    <meta property="og:description" content="sample text,sample tex">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:type" content="blog">
    <meta property="fb:admins" content="">
    <meta property="og:image" content="/images/common/ogp.png">
    <meta name="apple-mobile-web-app-title" content="">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/lib/modernizr.js"></script>

</head>

<body id="js-body">
    
    <!--start no script-->
    <?php include("inc/no_script.php"); ?>
    <!--end no script-->
    
    <div class="l-wrap js-wrap">
        <!--start header-->
        <?php include("inc/page_header.php"); ?>
        <!--end header-->

        <!--start header-->
        <?php include("inc/menu.php"); ?>
        <!--end header-->
        
        <!--start l-contents-->
        <div class="l-container u-clear">

            <!--start l-main-->
            <main class="l-main js-main">
                <div class="l-main-block"></div>
                {contents}
            </main>
            <!--end l-main-->

        </div>
        <!--end l-contents-->
 
        <!--footer ここから-->
        <?php include("inc/page_footer.php"); ?>
        <!--footer ここまで-->
   
    </div>

    <!--javascript ここから-->
    <script src="/lib/jquery-3.1.1.min.js"></script>
    <script src="/js/app.js"></script>
    <!--javascript ここまで-->
</body>

</html>