@extends('layouts.app')

@section('title-block')Редагувати повідомлення@endsection 

@section('content')
   <h1>Редагувати повідомлення</h1>
   
   
   <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
      @csrf

         <div class="form-group">
           <label for="name">Ваше імя</label>
           <input type="text" name="name" value="{{$data->name}}" placeholder="Введіть Ваше імя" id="name" class="form-control">
         </div>

          <div class="form-group">
               <label for="email">Еmail</label>
               <input type="text" name="email" value="{{$data->email}}" placeholder="Введіть електронну пошту" id="email" class="form-control">
          </div>

          <div class="form-group">
               <label for="subject">Тема повідомлення</label>
               <input type="text" name="subject" value="{{$data->subject}}" placeholder="Тема повідомлення" id="subject" class="form-control">
         </div>

          <div class="form-group">
               <label for="message">Повідомлення</label>
               <textarea name="message" id="message" value="{{$data->message}}" class="form-control" placeholder="Введіть повідомлення"></textarea>
          </div>

          <Button type="submit" class="btn btn-success">Оновити</Button>

      
   </form>
@endsection 