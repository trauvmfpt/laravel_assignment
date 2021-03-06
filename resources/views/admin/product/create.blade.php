<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://sstatic.net/so/favicon.ico">

    <title>Steamed</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Steamed</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/admin/product">Product List <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/product/create">Create New Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/category">List Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/category/create">Create New Category</a>
                </li>
            </ul>
            {{--<form class="form-inline my-2 my-md-0">--}}
                {{--<input class="form-control" type="text" placeholder="Search" aria-label="Search">--}}
            {{--</form>--}}
        </div>
    </div>
</nav>

<div class="container">
    <div>
        <h1>Create New Product</h1>
    </div>
    <form action="/admin/product" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <li class="form-group nav-item dropdown">
            <select class="form-control m-bot15" name="categoryName">
                @if ($categories ->count())
                    @foreach($categories as $category)
                        <option value="{{ $category->name }}" {{ $selectedCategory == $category->name ? 'selected="selected"' : '' }}>{{ $category->name }}</option>
                    @endforeach
                @endif
            </select>
        </li>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <label>Images</label>
            <input type="text" class="form-control" name="images">
        </div>
        <div class="form-group">
            <label>Content</label>
            <input type="text" class="form-control" name="content">
        </div>
        <div class="form-group">
            <label>Note</label>
            <input type="text" class="form-control" name="note">
        </div>
        <div>
            <button type="submit" class="btn btn-default">Submit</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </div>
    </form>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>