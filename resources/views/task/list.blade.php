<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta id="token" name="token" value="{{csrf_token()}}">
</head>
<body>
<tasks-app list="{{ $tasks }}"></tasks-app>
<template id="tasks-template">
    <div>
        <form action="" class="form-group" @submit="createTask">
            <input type="hidden" name="_token" value="{csrf_token()}"/>
            <input class="form-control" placeholder="" v-model="notes">
            <button class="btn btn-success btn-block">Create Task</button>
        </form>
        <h1>My Tasks</h1>
        <ul class="list-group">
            <li class="list-group-item" v-for="task in list | orderBy 'id' -1">
                @{{ task.body }}
                <strong @click="deleteTask(task)">X</strong>
            </li>
        </ul>
    </div>
</template>
<script src="https://cdn.bootcss.com/vue/1.0.4/vue.js"></script>
<script src="https://cdn.bootcss.com/vue-resource/0.6.1/vue-resource.js"></script>
<script>
    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

    var resource = Vue.resource('api/tasks/{id}');
    Vue.component('tasks-app',{
        template:'#tasks-template',
//            props:['list'],
        data:function(){
            return {
                notes:'',
                list:[]
            }
        },
        created:function(){
            var vm = this
//                this.list = JSON.parse(this.list);
//                $.getJSON('api/tasks',function(data){
            this.$http.get('api/tasks',function(data){
//                    console.log(data);
                vm.list = data;
            })
//            this.$http.get('/').then(function (response) {
//                this.$set('movies', response.data);
//            }
        },
        methods:{
            deleteTask:function(task){
                resource.delete({id:task.id},function(response){
                    console.log(response);
                });
                this.list.$remove(task);
            },
            createTask:function(e){
                e.preventDefault();
                this.$http.post('api/tasks',{body:this.notes},function(response){
                    console.log(response);
//                    this.list.push(response.task);
                    this.list.push(response.task);
                    this.notes = '';
                }.bind(this))
            }
        }
    });
    new Vue({
        el:'body'
    });
</script>
</body>
</html>
