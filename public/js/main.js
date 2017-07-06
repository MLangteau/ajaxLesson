Vue.component('tasks', {
    template: '#tasks-template',

    props: ['list'],

    created: function(){
        this.list = JSON.parse(this.list);
    }
});

new Vue({
    el: 'body'
});

//  Later

    // data: function () {
    //     return {
    //         list: []
    //     };
    // },
    // created: function(){
    //     this.fetchTaskList();
    // },
    //
    // methods: {
    //     fetchTaskList: function () {
    //         // this.$http.get('api/tasks', function(tasks) {
    //         this.list = JSON.parse(this.list);
    //             // this.list = tasks;
    //         //     console.log(tasks);
    //         // }.bind(this));
    //         // $.getJSON('api/tasks', function(tasks) {
    //         //     this.list = tasks;
    //         // }.bind(this));
    //     }
    // }
