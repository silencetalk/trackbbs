@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>Inform / Show #{{ $inform->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('informs.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('informs.edit', $inform->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Body</label>
<p>
	{{ $inform->body }}
</p> <label>User_id</label>
<p>
	{{ $inform->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $inform->category_id }}
</p> <label>Reply_count</label>
<p>
	{{ $inform->reply_count }}
</p> <label>View_count</label>
<p>
	{{ $inform->view_count }}
</p> <label>Last_reply_user_id</label>
<p>
	{{ $inform->last_reply_user_id }}
</p> <label>Order</label>
<p>
	{{ $inform->order }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
