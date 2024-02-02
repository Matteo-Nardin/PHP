<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
        <form method="post" action="gestione.php" enctype="multipart/form-data" class="my-3">
            <div class="row g-3">
                <div class="col-sm">
                    <input type="text" class="form-control" placeholder="Firstname..." name="firstname">
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" placeholder="Lastname..." name="lastname">
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" placeholder="City..." name="city">
                </div>
                <div class="col-sm">
                    <input type="tel" class="form-control" placeholder="Phone..." name="phone">
                </div>
                <div class="col-sm">
                    <input type="email" class="form-control" placeholder="Email..." name="email">
                </div>
                <div class="col-sm">
                    <input type="file" class="form-control" placeholder="Image..." name="image">
                </div>
                <div class="col-sm">
                    <button type="submit" class="btn btn-dark">Add Contact</button>
                </div>
            </div>
        </form>
    
</body>
</html>