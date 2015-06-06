<!DOCTYPE html>
<html xmlns = "http://www.w3.org/1999/html">
<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <title>Guestbook</title>
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
        body {
            padding: 2em 0
        }

        .error {
            font-weight: bold;
            color: red;
        }

    </style>
</head>
<body class = "container">

<div id = "guestbook">

    <form method = "POST" v-on = "submit: onSubmitForm">

        <div class = "form-group">
            <label for = "name">Name:

                <span class = "error" v-if = "! newMessage.name">* </span>

            </label>
            <input type = "text" name = "name" id = "name" class = "form-control" v-model = "newMessage.name">

        </div>
        <div class = "form-group">
            <label for = "message">Message:

                <span class = "error" v-if = "! newMessage.message">* </span>

            </label>

            <textarea name = "message" id = "message" class = "form-control"
                      v-model = "newMessage.message"></textarea>
        </div>

        <div class = "form-group">

            <button type = "submit" class = "btn btn-default" v-attr = "disabled: errors">Sign Guestbook</button>
        </div>

        <div class = "alert alert-success" v-if = "submitted">Thanks!</div>

    </form>

    <article v-repeat = "messages">
        <h3> @{{ name }}</h3>

        <div class = "body">@{{ message }}</div>

    </article>

    <br>
    <br>

</div>

<script src = "/js/vendor.js"></script>
<script src = "/js/guestbook.js"></script>

</body>
</html>