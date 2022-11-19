<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form>
    <div class="row">

    <div class="col-md-4">
    <div class="row">
    <div class="col-md-4">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" placeholder="Place" disabled>
    </div>
    </div>
</div>

<div class="col-md-5">
  <div class="row">
    <div class="col-md-4">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" placeholder="Place" readonly>
    </div>
  </div>


 
    <div class="form-group">
      <input type="text" class="form-control form-control-lg" placeholder="First name">
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-sm" placeholder="Last name">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Place">
    </div>

  <div class="form-group">
    <div class="form-check form-check-inline">
      <input type="radio" class="form-check-input" placeholder="">
      <label class="form-check-label">radio</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" class="form-check-input" placeholder="">
    </div>
    <div class="form-check form-check-inline">
      <input type="radio" class="form-check-input" placeholder="">
    </div>
   </div>

    <div class="form-check form-check-inline">
      <input type="checkbox" class="form-check-input" placeholder="">
      <label class="form-check-label">checkbox</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="checkbox" class="form-check-input" placeholder="">
      <label class="form-check-label">checkbox</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="checkbox" class="form-check-input" placeholder="">
      <label class="form-check-label">checkbox</label>
    </div>


    <div class="form-group">
      <input type="text" class="form-control" placeholder="Place">
    </div>
</div>

</div>

<div class="row">
    <div class="form-group">
        <label></label>
    <input type="range" class="form-control-range" >
</div>
</div>

</form>
</body>
</html>