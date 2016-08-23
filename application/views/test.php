<!DOCTYPE html>
<html lang="zh-cn">
<script src="/vue.js"></script>
<script src="/vue-resource.js"></script>
<script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.js"></script>
<link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">



<head>
    <meta charset="UTF-8">
    <title>满宠——满足你的宠物</title>
    <link rel="icon" type="image/png" href="/ei" sizes="32x32">

</head>


<body>
<!--header-->
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container header">
        <div class="row">
            <div class="col-md-2" style="text-align: right">
                满宠
            </div>

            <div class="col-md-6">
                <div class="btn-group">
                    <button class="btn-header">发现</button>
                    <button class="btn-header">我的</button>
                    <button class="btn-header">时间</button>
                    <button class="btn-header">精选</button>

                </div>

            </div>



            <div class="col-md-4">
                <div class="row search-box">

                    <input class="form-control search-text" placeholder="Search..." style="width: 200px;display: inline-block;" v-model="searchtext">
                    <ul class="dropdown-menu" :style="{display: showable}">
                        <li class="card-micro"><a href="#">{{searchtext}}</a></li>
                        <li class="card-micro"><a href="#">Another action</a></li>
                        <li class="card-micro"><a href="#">{{searchtext}}</a></li>
                        <li class="card-micro"><a href="#">{{searchtext}}</a></li>

                    </ul>
                    <img src="/ei" style="width: 30px;height: 30px;display: none" >
                    <button class="btn-header" style="display: inline-block" data-toggle="modal" data-target="#myModal">登陆</button>



                </div>

            </div>
        </div>
    </div>
</div>
<!--container-->
<div class="row">

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/img" alt="...">
                <div class="carousel-caption">
                    这是第一张图
                </div>
            </div>
            <div class="item">
                <img src="/img" alt="...">
                <div class="carousel-caption">
                    这是第二张图
                </div>
            </div>
            <div class="item">
                <img src="/img" alt="...">
                <div class="carousel-caption">
                    这是第3张图
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-8" style="margin-top: 10px" id="cardlist">

        <div class="col-md-3" v-for="card in cards">
            <div class="card-small" data-toggle="modal" data-target="#myModal">
                <img :src="card.img" style="width: 100%">
                {{ card.text }}

            </div>
        </div>

    </div>

    <div class="col-md-3" style="margin-top: 10px" id="cardminilist">

        <div class="card-mini" v-for="card in cards">
            <img :src="card.img" style="height: 100%">
            {{ card.text }}
        </div>

    </div>
</div>
<div class="row">

    <h5>end</h5>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="text-align: center">

        <div class="login-box" :style="{ display:showable }">
            <div class="login-head">
                <div class="login-head-text">
                    Login
                </div>
            </div>

            <div class="login-body">

                <div class="margin-10">
                    <input class="login-input w-7" type="text" placeholder="Email..." v-model="item.email"/>
                </div>
                <div class="margin-10">
                    <input class="login-input w-7" type="password"  placeholder="Password..." v-model="item.password"/>
                </div>

            </div>

            <div class="login-bottom">
                <button class="login-button" v-on:click="confirm">Confirm</button>
            </div>
        </div>

        <div class="card" :style="{ display:cdshowable }">
            sdfsdfsfsf
        </div>

    </div>
</div>

</body>
</html>
<link rel="stylesheet" href="/pet.css">
<script src="/pet.js"></script>