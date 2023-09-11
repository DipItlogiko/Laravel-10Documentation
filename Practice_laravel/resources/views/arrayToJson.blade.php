<!DOCTYPE html>
<html>
<head>
    <title>Array to JSON</title>
</head>
<body>
{{-- OR--}}
{{--(However, instead of manually calling json_encode, you may use the Illuminate\Support\Js::from method directive. The from method accepts the same arguments as PHP's json_encode function;--}}
{{--Amra akoi jinish ke ai 3 vabe korte pari kintu The latest versions of the Laravel application skeleton include a Js facade, which provides convenient access to this functionality within your Blade templates--}}    
    <script>
        var app = <?php echo json_encode($array); ?>; ////// akhane amader $array ta ke ooo jeson a convart kore dicche...ai $array ta amra pacchi web.php route theke...$array ta hocche akta php variable and php variable take javascript a print korte hole oi php variable take jeson a convart kore nite hoy and jeson ke javascript khub sohoje read korte pare kintu php variable ta sorasori javascript read korte pare na
        console.log(app); // You can view the result in the browser's console.
    </script>
     
    <script>
        var app = {{ Illuminate\Support\Js::from($array) }};  
        console.log(app); // You can view the result in the browser's console.
    </script>

    <script>
        var app = {{ Js::from($array) }};
        console.log(app); // You can view the result in the browser's console.
    </script>
    
    
</body>
</html>



 
