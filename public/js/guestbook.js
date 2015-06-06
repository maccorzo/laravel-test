new Vue({

    el: "#guestbook",

    data: {

        newMessage: {

            name: '',
            message: ''

        },


        submitted: false

    },


    computed: {

        errors: function () {

            for (var key in this.newMessage) {

                if (!this.newMessage[key]) return true;
            }

            return false;

        }


    },

    ready: function () {

        this.fetchMessages();


    },

    methods: {

        fetchMessages: function () {

            this.$http.get('/api/messages', function (messages) {

                this.$set('messages', messages);


            });

        },

        onSubmitForm: function (e) {

            e.preventDefault();

            this.submitted = true;


        }

    }


});