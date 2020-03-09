 @extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf

        @method('PATCH')

        <div class="col-8">
        <div class="row">
            <h1>Edit Profile</h1>
        </div>
        <div class="form-group row">
            <label form="motto" class="col-md-4 col-form-label">Company Motto</label>


            <input id="motto"
                   type="text"
                   class="form-control"
                   name="motto"
                   value="{{ old('motto') ?? $user->profile->motto}}"
            >
        </div>

        <div class="form-group row">
            <label form="description" class="col-md-4 col-form-label">Company Description</label>

            <textarea id="description"
                      type="text"
                      rows="5"
                      class="form-control"
                      name="description"
                      value="{{ old('description') ?? $user->profile->description }}"

            ></textarea>
        </div>

        <div class="form-group row">
            <label form="url" class="col-md-4 col-form-label">Company Website</label>

            <input id="url"
                   type="text"
                   class="form-control"
                   name="url"
                   value="{{ old('url')  ?? $user->profile->url }}"
            >
        </div>
            <div class="row pt-3">
                <button class="btn btn-primary">Save Profile Changes</button>
            </div>
        </div>
    </form>
</div>
@endsection
