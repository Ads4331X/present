<?php
include "try.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="form.css" />
</head>

<body class="bg-dark">
  <div class="container d-flex justify-content-center">
    <div class="form_center">
      <form method="post" action="save.php">
        <p class="display-3 text-info pt-5">Form</p>
        <br />
        <label class="text-light pb-2" for="username">Username:</label> <br />
        <input id="username" type="text" placeholder="Username" name="username" required />
        <br /><br />
        <label class="text-light pb-2" for="password">Password:</label> <br />
        <input
          id="password"
          type="password"
          placeholder="password"
          name="password"
          required /><br />
        <div class="action_btns">
          <button
            class="btn btn-sm text-info submit rounded-pill mt-4"
            type="reset">
            Reset
          </button>
          <button
            class="btn btn-sm text-info submit rounded-pill mt-4"
            type="submit">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>