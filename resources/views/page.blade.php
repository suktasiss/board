@extends('home')

@section('content')
<div class="title">
    <a href="/{{ $section }}">/{{ $section }}/</a>
</div>
<div class="form-div">
    <form class="form-post" action="/tpost" >
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control input-sm" style="font-size:13; height: 25" id="email" aria-describedby="email" placeholder="email">
          </div>
          <div class="form-group">
            <label for="anon-post">Message</label>
            <textarea class="form-control input-sm" style="font-size: 13" id="anon-post" placeholder="message"></textarea>
          </div>
          <div class="form-check-inline">
            <input type="checkbox" class="form-check-input" id="Op">
            <label class="form-check-label" for="Op">OP</label>
          </div>
          <div class="form-check-inline">
            <input type="checkbox" class="form-check-input" id="Sage">
            <label class="form-check-label" for="Sage">Sage</label>
          </div>
          <div class ="form-check-inline form-button">
            <button type="submit" class="btn btn-light form-button">Send</button>
          </div>
    </form>
</div>
@endsection