<?php include ("components/navbar.php");
$this->load->helper('url');
?>

<!doctype html>
<html lang="en">

<head>
    <title>CRUD - Employee Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="text-center">
        <div class="p-5 bg-image" style="background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>

        <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);
        ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5 p-2 text-light" style="background-color: #3a457b;">Add Employee Details</h2>
                        
                        <form method="post" action="<?php echo base_url('/index.php/employee/records'); ?>">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="form3Example1">First name</label>
                                        <input type="text" placeholder="Employee's First Name" name="fname"
                                            id="form3Example1" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="form3Example2">Last name</label>
                                        <input type="text" placeholder="Employee's Last Name" name="lname"
                                            id="form3Example2" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Email address</label>
                                <input type="email" placeholder="Employee's Valid Email Address" name="email"
                                    id="form3Example3" class="form-control" />
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="form4Example4">Job Type</label>
                                        <input type="text" placeholder="Employee's Job Type" name="job_type"
                                            id="form4Example4" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="form5Example5">Salary</label>
                                        <input type="text" placeholder="Employee's Salary" name="salary"
                                            id="form5Example5" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form6Example6">Joining Date</label>
                                <input type="date" placeholder="Employee's Joining Date" name="date"
                                    id="form6Example6" class="form-control" />
                            </div>

                            <input type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-block mb-4 text-light" style="background: #3a457b;" name="btn"
                                value="Add Employeer" />

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>