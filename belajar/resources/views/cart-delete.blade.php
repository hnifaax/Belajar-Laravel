@foreach ($cartdetaillist as $item)
    

<div class="modal fade" id="cart{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Remove {{$item->name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="/cart/{{$item->id}}" enctype="multipart/form-data ">
            @csrf    
            {{ method_field('DELETE') }}
            <div class="modal-body">
             Are you sure you want to <b>Remove</b>?
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endforeach