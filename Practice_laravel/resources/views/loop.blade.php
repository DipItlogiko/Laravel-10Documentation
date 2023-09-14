<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <!--for loop ar bebohar------------>

    {{-- @for($i = 0; $i < 10; $i++)
       The current value is {{ $i }} <br/>
    @endfor --}}


    <!--foreach() loop ar bebohar--(Check READEME.md)-------->
    <!--Amra ai foreach() loop ta bebohar kori array[] ar value print korar jonno (Check READEME.md)----->

       @foreach ($students as $student) {{--akhane $students array theke akta akta kore student ashbe $student variable aar moddhe--}}
           the student is {{ $student }} <br/>
       @endforeach


    <!--foreach() loop with loop variable---(Check READEME.md)----->   
     
    @foreach ($students as $student)  
    the student index is{{$loop->index}} and name is {{ $student }} <br/>
    @endforeach

    @foreach ($students as $student)  
    the student index is{{$loop->iteration}} and name is {{ $student }} <br/>
    @endforeach


    @foreach ($students as $student)  
    the student index is{{$loop->count}} and name is {{ $student }} <br/>
    @endforeach


    @foreach ($students as $student)  

        @if($loop->first)
           <li style="color: rgb(255, 0, 8)">{{ $student }}</li>

        @elseif($loop->last)
            <li style="color: rgb(30, 255, 0)">{{ $student }}</li>

        @else
            <li>{{ $student }}</li> 
        @endif
           
    @endforeach



    @foreach ($students as $student)  

        @if($loop->even) {{--amader loop ar index number onujayi jei number gulo even number mane jor sonkha oi index number ar value gulo green hoye jabe--}}
           <li style="color: rgb(0, 255, 76)">{{ $student }}</li>

        @elseif($loop->odd){{--index number onujayi je gulo bijor sonkha ba odd number tar value gulo red hoye jabe ---}}
            <li style="color: rgb(255, 0, 0)">{{ $student }}</li>
 
        @endif
           
    @endforeach


  <!--forelse() loop ar bebohar--------->    

  @forelse ($users as $key => $value) {{--$users array theke $key ar moddhe array ar key ta set hobe ba ashbe and $value ar moddhe value ta set hobe--}}
      {{$key}} -{{$value}}
  @empty {{--jodi $users array tar  moddhe kono data na thake empty hoy tahole aikhane chole ashbe and  No data found the array is empty; print kore debe----}}
      No data found!!! the array is empty;
  @endforelse


   
 
         
</body>
</html>