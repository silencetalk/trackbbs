@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Inform
          <a class="btn btn-success float-xs-right" href="{{ route('informs.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($informs->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Body</th> <th>User_id</th> <th>Category_id</th> <th>Reply_count</th> <th>View_count</th> <th>Last_reply_user_id</th> <th>Order</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($informs as $inform)
              <tr>
                <td class="text-xs-center"><strong>{{$inform->id}}</strong></td>

                <td>{{$inform->body}}</td> <td>{{$inform->user_id}}</td> <td>{{$inform->category_id}}</td> <td>{{$inform->reply_count}}</td> <td>{{$inform->view_count}}</td> <td>{{$inform->last_reply_user_id}}</td> <td>{{$inform->order}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('informs.show', $inform->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('informs.edit', $inform->id) }}">
                    E
                  </a>

                  <form action="{{ route('informs.destroy', $inform->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $informs->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
