<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Room Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="p-4 border rounded shadow bg-white" action="php/booking.php" method="post">

                    <h4 class="mb-4 text-center">Room Booking</h4>

                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $_GET['error']; ?>
                        </div>
                    <?php } ?>

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name"
                            value="<?php echo (isset($_GET['name'])) ? $_GET['name'] : "" ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="mails"
                            value="<?php echo (isset($_GET['mails'])) ? $_GET['mails'] : "" ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Room Name</label>
                        <input type="text" class="form-control" name="roomname"
                            value="<?php echo (isset($_GET['roomname'])) ? $_GET['roomname'] : "" ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Check-in Date</label>
                        <input type="date" class="form-control" name="timein"
                            value="<?php echo (isset($_GET['timein'])) ? $_GET['timein'] : "" ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Check-out Date</label>
                        <input type="date" class="form-control" name="timeout"
                            value="<?php echo (isset($_GET['timeout'])) ? $_GET['timeout'] : "" ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Note</label>
                        <input type="text" class="form-control" name="note"
                            value="<?php echo (isset($_GET['note'])) ? $_GET['note'] : "" ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">Book Room</button>
                    <a href="index.php" class="btn btn-secondary">Back to home</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY0OYU7WtUH08+9MMpdEa4TK/dAWL3I5nJuBj"
        crossorigin="anonymous"></script>
</body>

</html>