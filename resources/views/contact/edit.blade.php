@section('main')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a contact</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <br /> 
        <form method="post" action="{{url('update',['id' => $contact->id])}}">
            @csrf
            @method('PATCH')
        <div class="form-group">
          <label for="first_name">First Name:</label>
          <input type="text" class="form-control" name="first_name" value="{{$contact->first_name}}" />
        </div>
        <div class="form-group">
          <label for="last_name">Last Name:</label>
          <input type="text" class="form-control" name="last_name" value="{{$contact->last_name}}" />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" name="email" value="{{$contact->email}}" />
         </div>
         <div class="form-group">
          <label for="city">City:</label>
          <input type="text" class="form-control" name="city" value="{{$contact->city}}" />
         </div>
         <div class="form-group">
          <label for="country">Country:</label>
          <input type="text" class="form-control" name="country" value="{{$contact->country}}" />
         </div>
         <div class="form-group">
          <label for="job_title">Job Title:</label>
          <input type="text" class="form-control" name="job_title" value="{{$contact->job_title}}" />
         </div>
         <br>
         <button type="submit" class="btn btn-primary">update </button>
         </form>
    </div>
</div>