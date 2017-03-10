<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
 
    <!-- bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
     
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="">
    </head>
     
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped">
                        <thead><th>User</th><th>Blogs Written</th><th>View Blogs</th></thead>
                        <tbody>
                            <repeat group="{{ @users }}" value="{{ @user }}">
                                <tr>
                                    <td>{{ ucfirst(@user) }}</td>
                                    <td>{{ @blogCounts[@user] }}</td>
                                    <td><a href="viewBlogs/{{ @user }}">view</a></td>
                                </tr>
                            </repeat>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>