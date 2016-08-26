<!DOCTYPE html>
<html lang="zh-cn">
<script src="/vue.js"></script>
<script src="/vue-resource.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <div class="row">
        <div class="register-box">
            <div class="register-head">
                <div class="register-head-text">
                    Register
                </div>
            </div>

            <div class="register-body">
                <div class="margin-10">
                    <input type="name"  placeholder="Name..." v-model="item.name"/>
                </div>
                <div class="margin-10">
                    <input type="email" class="w-7" placeholder="Email..." v-model="item.email"/>
                </div>
                <div class="margin-10">
                    <input type="password"  placeholder="Password..." v-model="item.password"/>
                </div>
                <div class="margin-10">
                    <input type="password"  placeholder="Password again..." v-model="item.passwordagain"/>
                </div>
            </div>

            <div class="register-bottom">
                    <button class="button" v-on:click="confirm">Confirm</button>
            </div>

        </div>
    </div>
</body>
<link rel="stylesheet" type="text/css" href="/annulus.css">
<script>
Vue.http.options.emulateJSON = true;
var registerbox = new Vue({
    el: '.register-box',
    data:{
        item: {},
        showable: 'none'
    },
    methods:{
        confirm: function () {
            this.$http.post('/register/checkregister',this.item).then(
                (response) =>{
                console.log(response.data)
            this.showable = 'none'
            //window.location.href="/home"
        }).catch(function(response) {
                console.log(response)
            })
        }
    }
})
</script>
</html>