<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    @foreach ($students as $student)
       {{--Continue ar bebohar---}} 

        {{-- @if ($student == 'dibbo') (akhane $student theke jokhon dibbo value ta ashbe tokhon dibbo ta ke bad diye sob value print kore dibe) 
        @continue (dibbo take skip korbe ba bad diye debe @continue) 
        @endif --}}

        {{--OR(we can write above 3 code in one line)---}}
        @continue($student == 'dibbo')


        <li>{{ $student }}</li> <!--dibbo take bad diye $students array theke sob print korbe---->
                
    @endforeach



    @foreach ($students as $student)

      {{--Break ar bebohar---}}
    
      {{-- @if ($student == 'rahul')
      @break (akhane $student ar moddhe jokhon rahul ke pabe rahul theke tar pore joto value ache ta r dekhabe na mane break hoye jabe kintu rahul ar aage joto value ache sob dekhabe)         
      @endif --}}

      {{--OR(we can write above 3 code in one line)---}}
      @break($student == 'rahul')
        
          <li>{{$student}}</li>

    @endforeach

</body>
</html>