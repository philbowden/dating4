<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personal Info</title>
    <link rel="stylesheet" href="/328/dating/css/bootstrap.min.css">
    <link href="/328/dating/css/personalStyles.css" rel="stylesheet"/>
</head>
<body>
<header>
    <ul class="navbar bg-dark navbar-dark navbar-expand-sm">
        <section class="container">
            <div class="navbar-nav">
                <li class="nav-item"><a class = "nav-link" href="http://pbowden.greenriverdev.com/328/dating/">My Dating Site</a></li>
            </div>
        </section>
    </ul>
</header>
<form class="form-group" method="post" action="#">
    <div class="container border">
        <h1>Personal Information</h1>
        <hr>
        <div class="row">
            <section class="col-8">
                <div class="form-text form-row">
                    <label class="form-control-label" ><strong>First Name</strong>
                        <input id="fname" class="form-control" type="text" name="fname" value="<?= ($fname) ?>">
                    </label>
                </div>
                <div class="form-text form-row">
                    <label class="form-control-label" ><strong>Last Name</strong>
                        <input class="form-control" type="text" name="lname" value="<?= ($lname) ?>">
                    </label>
                </div>
                <div class="form-text form-row">
                    <label class="form-control-label" ><strong>Age</strong>
                        <input class="form-control" type="number" name="age" value="<?= ($age) ?>">
                    </label>
                </div>
                <div class="form-text form-row">
                    <label class="form-control-label" ><strong>Phone Number</strong>
                        <p>please enter 10 digits with no spaces, hyphens, or commas</p>
                        <input class="form-control" type="tel" name="phone" value="<?= ($phone) ?>">
                    </label>
                </div>
                <div class="form-text form-row">
                    <label class="form-text" ><strong>Gender<br></strong>
                        <input class="form-group" type="radio" name="gender" value="Male">Male
                        <input class="form-group" type="radio" name="gender" value="Female">Female
                    </label>
                </div>
                <fieldset>
                    <legend>
                        Height
                    </legend>
                    <div class="form-text form-row">
                        <label class="form-control-label" ><strong>Feet</strong>
                            <input class="form-control p-3" type="number" name="feet" value="<?= ($feet) ?>">
                        </label>
                        <label class="form-control-label" ><strong>Inches</strong>
                            <input class="form-control" type="number" name="inches" value="<?= ($inches) ?>">
                        </label>
                    </div>
                </fieldset>
                <label><strong>Premium Membership</strong><br>
                    <input class="form-group" type="checkbox" value="premium"
                           name="premium">Sign me up for Premium Account!
                </label>

            </section><!--column left-->
            <div class="col-4 text-center">
                <section id="paragraph" class="bg-secondary-light">
                    <blockquote class="blockquote mt-3">
                        <strong>Note</strong>: All information entered is protected by our <span class="text-primary">privacy policy</span>.
                        Profile information can only be viewed by others with your permission.
                    </blockquote>
                </section><!--column right-->
            </div>

        </div><!--row-->

        <div id="btn" class="container text-md-right pb-2">
            <button  class="btn-primary btn-sm rounded" type="submit">Next ></button>
        </div>
    </div><!--main div-->
</form>

</body>
</html>