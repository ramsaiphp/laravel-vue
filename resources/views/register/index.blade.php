<!-- index.html -->

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vue</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<!-- navigation bar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <a class="navbar-brand"><i class="glyphicon glyphicon-bullhorn"></i> Users Registration</a>
    </div>
</nav>

<!-- main body of our application -->
<div class="container" id="users">

    <!-- add an event form -->
    <div class="col-sm-6">
        <div class="panel-heading">
            <h3>Add an User</h3>
        </div>
        <div class="panel-body">
            <form @submit.prevent="addUser">
                {{ csrf_field() }}
                <div class="form-group">
                    <input class="form-control" placeholder="User Name" v-model="name">
                </div>


                <div class="form-group">
                    <input class="form-control" placeholder="Email" v-model="email">
                </div>

                <div class="form-group">
                    <input type = 'password' class="form-control" placeholder="Password" v-model="password">
                </div>

                <button class="btn btn-primary">Submit</button>

            </form>

        </div>
    </div>

    <!-- show the events -->
    <div class="col-sm-6">
        <div class="list-group">
            <a href="#" class="list-group-item" v-for="user in users">
                <h4 class="list-group-item-heading">
                    <i class="glyphicon glyphicon-bullhorn"></i>
                    @{{ user.name }}
                </h4>

                <h5>
                    <i class="glyphicon glyphicon-calendar"></i>
                    @{{ user.email }}
                </h5>
                <button class="btn btn-xs btn-danger" v-on:click="deleteUser(user)">Delete</button>
            </a>

        </div>
        

    </div>
</div> {{-- /#users --}}

<!-- JS -->
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="js/app.js"></script>
</body>
</html>

