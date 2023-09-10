@extends('layout.dashboard', ['title' => 'Make a Request'])

@section('content')
  <div class="_heading">
    <h1>Make a Request</h1>

    <a class="back_btn" href="/dashboard">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8 16L9.41 14.59L3.83 9L16 9L16 7L3.83 7L9.41 1.41L8 -6.99382e-07L6.99382e-07 8L8 16Z"
          fill="#131313" />
      </svg>
    </a>
  </div>

  <form class="requestForm">
    <div class="upload_group">
      <div class="up_icon mb-3">
        <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="21.5" cy="21.5" r="21.5" fill="#8C8C8C" />
          <path
            d="M30 14H14C12.895 14 12 14.895 12 16V28C12 29.105 12.895 30 14 30H30C31.105 30 32 29.105 32 28V16C32 14.895 31.105 14 30 14ZM15 27L18.5 22.5L21 25.51L24.5 21L29 27H15Z"
            fill="white" />
        </svg>
      </div>

      <p class="">Drag and drop a clear cover picture for this request</p>
      <p class="h4 fw-bold my-4">OR</p>
      <div class="btn btn-success">Browse</div>
    </div>

    <div class="row">
      <div class="col-12 col-md-6 form_group">
        <label for="" class="form-label">Location</label>
        <select class="form-select">
          <option selected>-- Select --</option>
          <option value="1">Lagos</option>
        </select>
      </div>

      <div class="col-12 col-md-6 form_group">
        <label for="" class="form-label">Target</label>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="0.00" aria-describedby="basic-addon2">
          <span class="input-group-text" id="basic-addon2">₦</span>
        </div>
      </div>
    </div>

    <div class="form_group">
      <label for="" class="form-label">Request title</label>
      <input type="email" class="form-control">
    </div>

    <div class="form_group">
      <label for="" class="form-label">Description</label>
      <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form_group">
      <button class="btn btn-success">Submit</button>
    </div>
  </form>
@endsection
