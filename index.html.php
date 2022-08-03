<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmoma video presentacion</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <img class="imgZedis" src="./assets/images/zedis.png" alt="...">
                <div class="rowTitle">
                    <div class="col-sm-12 text">
                        <h1>
                            <strong>ZMOMA VIDEO PRESENTATION</strong>
                        </h1>
                        <h3 class="h3 "> ON-DEMAND CONTENT, EXCLUSIVE FOR L'OREAL</h3>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class=" col-lg-5">
                        <div class="form-box">
                            <h3 class="p">Sign up to access this content</h3>
                        </div>
                        <form action="registro.php" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="name"></label>
                                <input required type="text" name="name" placeholder="Name / Last name*" class="form-name form-control" id="form-name">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email"></label>
                                <input required type="email" name="email" placeholder="Email*" class="form-email form-control" id="form-email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="phone"></label>
                                <input required type="number" name="phone" placeholder="Phone*" class="form-phone form-control" id="form-phone">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="company"></label>
                                <input required type="text" name="company" placeholder="Company*" class="form-company form-control" id="form-company">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="department"></label>
                                <input required type="text" name="department" placeholder="Department*" class="form-department form-control" id="form-department">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="position"></label>
                                <input required type="text" name="position" placeholder="Position*" class="form-position form-control" id="form-position">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="country"></label>
                                <input required type="text" name="country" placeholder="Country*" class="form-country form-control" id="form-country">
                            </div>
                            <div class="form-top ">
                                <div class="form-top-left">
                                <input type="submit" name="submit" class="button" value="SUBMIT">
                                </div>
                                <input type="checkbox" id="check" required name="check" value="check">
                                <label for="check" class="checkboxText"> I agree to share my datawith the Zedis family of companies for marketing purposes. For this purpose and the following, you can oppos and access, rectify or delete your data and exercise other rights as indicated in xxxx</label>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-5">
                        <div class="form-box">
                            <div>
                                <p>"Discover the new Z-MOMA a makeup unit designed to be reused an minimize the impact on the enviroment."</p>
                            </div>
                            <img src="assets/images/gif.gif" alt="">
                            <p>A modular system made up of high-quality injected plastic modules that can be transformed according to the image and size that your brand needs and, by combining the same modules, can form an infinte number of sizes. A revolutionary and nnovative system developed and patented by ZEDIS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>