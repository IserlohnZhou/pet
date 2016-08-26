Vue.config.debug = true

var articlelist = new Vue({
    el:'.article-list',
    data:{
        articles:[],
        showable: 'none',
        cardheight: '100%'
    },

    methods:{
        getList: function () {
            this.$http.get('/articles').then(
                (response) =>{
                console.log(response.data)
            this.articles = response.data;
        }
            ).catch(function(response) {
                console.log(response)
            })
        },
        select: function () {

        },
        edit: function () {

        }
    }
})



var labellist = new Vue({
    el:'.label-list',
    data:{
        labels: []
    },
    ready:function(){
        this.getList()
    },
    methods:{
        getList: function () {
            this.$http.get('/labels').then(
                (response) =>{
                console.log(response.data)
            this.labels = response.data;
        }
            ).catch(function(response) {
                console.log(response)
            })
        }
    }
})

var searchbox = new Vue({
    el:'.search-box',
    data:{
        searchtext: ''
    },
    methods:{
        search: function () {
            if (this.searchtext==''){

            }
            else
            {
                this.$http.get('/search?searchtext='+this.searchtext).then(
                    (response) =>{
                    console.log(response.data)
                articlelist.articles = response.data;
                }).catch(function(response) {
                    console.log(response)
                })
            }

        }
    }
})

searchbox.$watch('searchtext',function () {
        this.search()
    }

)

var registerbox = new Vue({
    el: '.register-box',
    data:{
        name:'',
        email:'',
        password:'',
        passwordagain:'',
        nameerr:'',
        emailerr:'',
        passworderr:'',
        passwordagainerr:'',
    },
    methods:{
        confirm: function () {

            this.$http.post('/register',this.data).then(
                (response) =>{
                console.log(response.data)

        }).catch(function(response) {
                console.log(response)
            })
        }
    }
})

registerbox.$watch('name',function (value) {
    if(value.length<6)
    {
        this.nameerr = '<= At least 6 characters'
        return
    }
    if(value.length>32)
    {
        this.nameerr = '<= At most 32 characters'
        return
    }
    this.nameerr = ''
})

var loginbox= new Vue({
    el: '.login-box',
    data:{
        email:'',
        password: '',
        vcode: '',
        showable: 'block'
    },
    methods:{
        confirm: function () {
            console.log('=='+JSON.stringify(this.$data))
            this.$http.post('/login',this.$data).then(
                (response) =>{
                console.log(response.data)

        }).catch(function(response) {
                console.log(response)
            })
        }
    }
})