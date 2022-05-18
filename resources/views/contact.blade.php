@extends('layouts.app')

@section('title-block')Контакти@endsection 

@section('content')
   <h1>Контакти</h1>
   
   
   <form action="{{ route('contact-form') }}" method="post">
      @csrf

         <div class="form-group">
           <label for="name">Ваше імя</label>
           <input type="text" name="name" placeholder="Введіть Ваше імя" id="name" class="form-control">
         </div>

          <div class="form-group">
               <label for="email">Еmail</label>
               <input type="text" name="email" placeholder="Введіть електронну пошту" id="email" class="form-control">
          </div>

          <div class="form-group">
               <label for="subject">Тема повідомлення</label>
               <input type="text" name="subject" placeholder="Тема повідомлення" id="subject" class="form-control">
         </div>

          <div class="form-group">
               <label for="message">Повідомлення</label>
               <textarea name="message" id="message" class="form-control" placeholder="Введіть повідомлення"></textarea>
          </div>

          <Button type="submit" class="btn btn-success">Відправити</Button>

      
   </form>
@endsection 