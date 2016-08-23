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
        show: function () {
            
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
    }

})

Vue.http.options.emulateJSON = true;
var loginbox = new Vue({
    el: '.login-box',
    data:{
        item: {},
        showable: 'block'
    },
    methods:{
        confirm: function () {
            this.$http.post('/login/check',this.item).then(
                (response) =>{
                console.log(response.data)
            this.showable = 'none'

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
        showable: 'none'
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
                    this.showable = 'block'
            }).catch(function (response) {
                    console.log(response)
                })
            }
        }
    }
})

searchbox.$watch('searchtext',function () {
        this.search()
})

