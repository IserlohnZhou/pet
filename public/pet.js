/**
 * Created by eidosper on 2016/8/17.
 */
var loginstat = false
Vue.config.debug = true

var cardlist = new Vue({
    el: "#cardlist",
    data:{

        cards:[
            {text:'card1',img:'/ei'},
            {text:'card2',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
        ]
    },
    methods:{
        getlist:function(){
            this.$http.get('/cardlist').then(
                (response) =>{
                console.log(response.data)
                this.cards = response.data

            }).catch(function(response) {

                console.log(response)
            })
        }
    }

})

var cardminilist = new Vue({
    el: "#cardminilist",
    data:{
        cards:[
            {text:'card1',img:'/ei'},
            {text:'card2',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
        ]
    },
    methods:{
        getlist:function(){
            this.$http.get('/cardminilist').then(
                (response) =>{
                console.log(response.data)
                this.cards = response.data

            }).catch(function(response) {

                console.log(response)
            })
        }
    }

})


var loginbtn = new Vue({
    el: '#btn-login',
    methods:{
        login:function(){
            loginbox.showable = 'block'
            console.log('login-btn')
        }
    }
})

Vue.http.options.emulateJSON = true;
var loginbox = new Vue({
    el: '.login-box',
    data:{
        item: {},
        showable: 'none'
    },
    methods:{
        confirm: function () {
            this.$http.post('/login',this.item).then(
                (response) =>{
                console.log(response.data)
            this.showable = 'none'
            cardlist.getlist()
            cardminilist.getlist()

        }).catch(function(response) {

                console.log(response)
            })
        }
    }
})

var searchbox = new Vue({
    el:'.search-box',
    data:{
        searchtext:'',
        showable: 'none',
        results: {}
    },
    methods: {
        search: function () {
            if (this.searchtext == '') {
                this.showable = 'none'
            }
            else {
                this.$http.get('/search?searchtext=' + this.searchtext).then(
                    (response) => {
                    console.log(response.data)
                    this.results = response.data
                    this.showable = 'block'
            }).catch(function (response) {
                    alert(response)
                    console.log(response)
                })
            }
        },
        onEnter: function(){
            window.open("/searchresult")
        }
    }
})

searchbox.$watch('searchtext',function () {
        this.search()
})

var userpage = new Vue({
    el:'#user-page',
    data:{
        userinfo:{},
        vertpos: 100,
        showable: 'none',
        cards:[
            {text:'card1',img:'/ei'},
            {text:'card2',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
            {text:'card1',img:'/ei'},
        ]
    },
    methods:{

    }
})

if ( ! ( !-[1,]) ) {  //非IE6浏览器
    //$('.card-large').css( 'left', ( $(window).width() - 1002 ) / 2 );
    $(window).scroll(function(){
        $('.card-large').css( 'top', 100 - $(window).scrollTop()/2 );
    });
}