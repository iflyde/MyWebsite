@extends('layouts.app')

@section('title-block')Головна сторінка@endsection 

@section('content')
   <h1>Головна сторінка</h1>
   <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, 
      suscipit debitis animi cumque quae odio iure enim ex cupiditate, 
      dicta quasi quas quod amet, maxime similique blanditiis neque dolores? Doloremque.</p>
@endsection  

@section('aside')
   @parent
   <p>Додатковий текст</p>
@endsection   