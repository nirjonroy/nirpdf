@extends('admin_layout')
@section('content')

  @foreach($all_categories_info as $v_categories)
     Category id: {{$v_categories->id}} <br>
      Category Name:{{$v_categories->name}}<br>
      Category Business Id:{{$v_categories->business_id}}<br>
      Category Short Code:{{$v_categories->short_code}}<br>
      Category Parent Id:{{$v_categories->parent_id}}<br>
      Category Created Id:{{$v_categories->created_by}}<br>
      Category Created Id:{{$v_categories->created_by}}<br>
      Category Category Type:{{$v_categories->category_type}}
      
    @endforeach<br>
    <a href="{{url('general-invoice')}}" class="btn btn-success float-right">Generate Invoice</a>

 @endsection   