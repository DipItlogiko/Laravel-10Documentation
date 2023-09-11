# Laravel-10Documentation

## Blade Templates

***All practices are located into the routes/web.php***

* Introduction

  Blade is the simple, yet powerful templating engine that is included with Laravel.


* Displaying Unescaped Data

  Be very careful when echoing content that is supplied by users of your application. You should typically use the escaped, double curly brace {{ }} syntax to prevent XSS attacks when displaying user supplied data.

##  Blade Directives 

  Blade Directives @ diye likha hoy and ai Directives gulo amra view blade.php file gulote use kori

* **If Statements**

  @if(),
  
  @elseif(), 
  
  @else, and @endif


* **@verbatim Directive**
   
  If you are displaying JavaScript variables in a large portion of your template, you may wrap the HTML in the @verbatim directive.karon jemon javascript framework (VueJS) a variable print korte ooooo {{ }} bebohar kora hoy.jodi ami VueJS ar variable take laravel a print kori tahole akta conflick hobe karon {{ }} ai ta laravel ar blade ar expression ar moddhe kono variable likhle shitake {{ $ }} doller symbol diye likhte hoy..kintu VueJs a {{ }} ar moddhe sorasoti variable ar name like dite hoy jokhon amra {{ }} ar moddhe sorasori variable ar nam likhe debo tokhon laravel amader akta error throw korbe je Undefine Constant ...ai problem take solve korar jonno amra @verbatim Directive use korbo and amader javascript variable ta @verbatim ar moddhe likhbo   @endverbatim  thole laravel bujte parbe je {{ }} ar moddhe je variable ta oi ta onno kono syntax ar jonno tai ooo  oitake ignor kore dibe mane oi blade expression take oo r read korbe na


  @endverbatim

* **@unless() Directive**
  
  @unless directive akta condition nei and condition ta jodi false hoy taholei unless ar moddhe jei ta thake oitake print kore jodi condition ta true hoy tahole kichui print korbe na

  @endunless

  (check routes/web.php)

* **@isset() Directive**  

  amader kono array ba variable a data ache ki na aita check korar jonno amra @isset Directive use kori 


* **@empty() Directive**  

  @empty() directive ar maddhome amra check korte pari kono array ba variable empty ki na.  

  @endempty

## Authentication Directives([link](https://laravel.com/docs/10.x/blade#authentication-directives))
  
* **@auth**  
    
    amra ar moddhe ja likhbo shudhu authenticated user chara r kew dekhte pabe na
    
  @endauth

* **@guest**  
    
   amra ar moddhe ja likhbo shei gulo guest user ra dekhte pabe gust user mane authenticated na jara tara dekhte pabe 

  @endguest


## Environment Directives  

* **@production directive**
  
  majhe moddhe environment ar oopor vitti kore amader proyojon hoy je kichu hide korar abong kichu show korar  tokhon amra @production directive use korte pari .(check routes/web.php)

  @endproduction


* **@env() directive**

  @production directive and @env() directive almost same you can use any of them .(check routes/web.php)

  @endenv


## some Important things

* jodi amra blade template a {{ $name }} aivabe kono variable ar value print kori tahole oita thik vabei shei value take print korbe but jodi amra @{{ $name }} ai vabe likhi tahole r variable ar value print hobe na sora sori aita print hoye jabe {{ $name }} browser a r @ autometically remove hoye jabe browser theke 

* amra blade directive @if likhi muloto ai vabe kintu jodi amra @@if likhi tahole amader browser a @if print hoye jabe 

## the belows topic i don't understand:

* HTML Entity Encoding(i am unable to execute code)([link](https://laravel.com/docs/10.x/blade#html-entity-encoding))

* 