/**
 * Created by ramsai on 29/8/16.
 */
import Vue from 'vue';
Vue.use(require('vue-resource'));
new Vue({
    el: '#users',
    data: {
        users: [],

        name:'',
        email:'',
        password:'',

        data: {},

    },

    http: {
        root: '/root',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    },
    // Anything within the ready function will run when the application loads
    ready: function() {
        // When the application loads, we want to call the method that initializes
        // some data
       this.fetchUsers();
    },
// Methods we want to use in our application are registered here
    methods: {

        // We dedicate a method to retrieving and setting some data
        fetchUsers: function() {
            var users = [];
            this.$http.get('/users').then(({data}) => {
                    this.users = data;
                }
            )

        },

        // Adds an event to the existing events array
        addUser: function(event) {

            this.data.name = this.name;
            this.data.email = this.email;
            this.data.password = this.password;

                this.$http.post('/create', this.data);

                this.users.push(this.data);

            this.name = '';
            this.email = '';
            this.password='';
        },

        deleteUser: function(user) {
            if(confirm("Are you sure you want to delete this event?")) {
                this.$http.delete('/deleteusers/' +user.id, user).then((response) => {
                    // success callback
                    this.users.$remove(user);
            }, (response) => {
                    // error callback
                    //console.log(err);
                });

            }
        }

   }
});

