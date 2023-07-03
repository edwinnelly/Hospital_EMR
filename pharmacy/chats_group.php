
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hospital | Chat view</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap');
    </style>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            font-size: 15px;
        }
    </style>

</head>

<body id="">

<div id="wrapper">

    <?php
    include "inc/sidebar.php";
    ?>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <?php
            include "inc/header.php";
            ?>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Chat view</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Miscellaneous</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Chat view</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>


        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-content">

                            <strong>Chat room </strong> can be used to create chat room in your app.
                            You can also use a small chat in the right corner to provide live discussion.

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox chat-view">

                        <div class="ibox-title">
                            <small class="float-right text-muted">Last message:  Mon Jan 26 2015 - 18:39:23</small>
                            Chat room panel
                        </div>


                        <div class="ibox-content">

                            <div class="row">

                                <div class="col-md-12 ">
                                    <div class="chat-discussion" id="div1">

                                        <div class="chat-message left">
                                            <img class="message-avatar" src="https://www.pngall.com/wp-content/uploads/5/Profile-Male-PNG.png" alt="" >
                                            <div class="message">
                                                <a class="message-author" href="chat_view.html#"> Michael Smith </a>
                                                <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                <span class="message-content">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                            </span>
                                            </div>
                                        </div>
                                        <div class="chat-message right">
                                            <img class="message-avatar" src="https://www.pngall.com/wp-content/uploads/5/Profile-Male-PNG.png" alt="" >
                                            <div class="message">
                                                <a class="message-author" href="chat_view.html#"> Karl Jordan </a>
                                                <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                <span class="message-content">
											Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.
                                            </span>
                                            </div>
                                        </div>
                                        <div class="chat-message right">
                                            <img class="message-avatar" src="https://www.pngall.com/wp-content/uploads/5/Profile-Male-PNG.png" alt="" >
                                            <div class="message">
                                                <a class="message-author" href="chat_view.html#"> Michael Smith </a>
                                                <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                <span class="message-content">
											There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                            </span>
                                            </div>
                                        </div>
                                        <div class="chat-message left">
                                            <img class="message-avatar" src="https://www.pngall.com/wp-content/uploads/5/Profile-Male-PNG.png" alt="" >
                                            <div class="message">
                                                <a class="message-author" href="chat_view.html#"> Alice Jordan </a>
                                                <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                <span class="message-content">
											All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                                It uses a dictionary of over 200 Latin words.
                                            </span>
                                            </div>
                                        </div>
                                        <div class="chat-message right">
                                            <img class="message-avatar" src="https://www.pngall.com/wp-content/uploads/5/Profile-Male-PNG.png" alt="" >
                                            <div class="message">
                                                <a class="message-author" href="chat_view.html#"> Mark Smith </a>
                                                <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                <span class="message-content">
											All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                                                It uses a dictionary of over 200 Latin words.
                                            </span>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="chat-message-form">

                                        <div class="form-group">

                                            <textarea class="form-control message-input" name="message" placeholder="Enter message text"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>


        </div>
        <?php
        include_once "inc/footer.php";
        ?>

    </div>


</div>



<!-- Mainly scripts -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js/inspinia.js"></script>
<script src="js/plugins/pace/pace.min.js"></script>

<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script>

    $("#div1").animate({ scrollTop: $('#div1').prop("scrollHeight")}, 1000);
</script>
</body>

</html>
