/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when building
 * robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to the
 * page. Then, you may begin adding components to this application or customize
 * the JavaScript scaffolding to fit your unique needs.
 */


class Post {
    constructor(title, link, image) {
        this.title = title;
        this.link = link;
        this.image = image;
    }
}
const app = new Vue({
    el: "#app",
    data: {
        showModal: true,
        keyword: '',
        newItem: {
            'id': '',
            'name': '',
            'link': '',
            'image': ''
        },
        productList: []
    },
    mounted : function(){
        this.getItems();

  },
    methods: {
      getItems: function(){
            axios.get('/getproducts').then(response => {
            this.productList = response.data;
            console.log(response.data);
          });
      },
    },
    computed: {
        href() {
            return '/products/' + this.productList;
        },
        filteredList() {
          return this.productList.filter(post=>{
              return post.name.toLowerCase().includes(this.keyword.toLowerCase());
            });
        }
    }
});

var vue = new Vue({
    el: '#image',

    data: {
        source: image
    },
    
    methods: {
        copySrc: function(img){
            this.source = img.srcElement.src;
            console.log(this.src);
        }
    }
});