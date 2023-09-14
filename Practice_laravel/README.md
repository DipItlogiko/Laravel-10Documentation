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

## Section Directives

[tutorial-link](https://www.youtube.com/watch?v=dENKf4U9y5o)

* **@hasSection()**

  (check routes/web.php)

  @endif


* **@sectionMissing()**  

  (check routes/web.php)

  @endif


## Switch Statements
 
  **Switch Statements Directives:**

* @switch

* @case

* @break

* @default 

* @endswitch

(go to routes/web.php in this section i have written many ways how to pass the variable into the view file)

## Loops

In addition to conditional statements, Blade provides simple directives for working with PHP's loop structures,such as:

* @for()
  
  @endfor

* @foreach()  

  @endforeach

  NOTE:  amra @foreach() loop bebohar kori array[] ar value print korar jonno 

  **@foreach()** loop ar sathe amra loop variable use korte pari.loop variable gulo jemon:

   ![Loop variable Image](/Practice_laravel/Screenshot%20from%202023-09-12%2013-27-27.png)

   * $loop->index 

     jodi amra  loop ar moddhe index number print korte chai tahole ai ta bebohar korbo.

   * $loop->iteration

     jodi amra loop ar sathe counting ooo korte chai tahole amra aita bebohar korbo.

   * $loop->remaining

     aitar maddhome amra aita bujte pari je jokhon  loop print hocche or moddhe koi ta remaining value roye geche..aita beshi bebohar kora hoy na ..na bolte gelei chole

   * $loop->count

     ar maddhome amra bujte pari amader loop a total koto gulo array  ar value ache.


  * $loop->first

     aitar maddhome amra jante pari loop ar first value ki 

  * $loop->last

     aitar maddhome amra jante pari loop ar last value ki

  * $loop->even
    
     loop cholar somoy jodi amra jante chai even value konta tokhon amra aita bebohar korbo

  * **Nested loop properties**

  * $loop->depth

     aitar maddhome amra dekhte pari amader koita nested loop ache...aita temon akta proyojon hoy na


  * $loop->parent

     jokhon amra nested loop a kaj kori tokhon akta outer loop banai and or  moddhe akta inner loop banai....to jokhon amr proyojon hobe inner loop a  index number ki cholche    count ki cholche ai ta janar jonno amader prothome $loop->parent ar por oopore joto property ache aigulo bebohar kore jante pari outer ba parent loop ar count koto ba or iteration value ki and so on.

   

* @forelse()
  
  @empty
 
  @endforelse

  NOTE: ai loop ta ooo array ar value print korar jonno use hoy jodi amra chai je amader array ar moddhe value na thakle akta message ba kichu return koruk tokhon amra aita bebohar korbo.

* @while()

  @endwhile

   
## @break() and @continue()

* @break()

  condition ta jekhane milbe sheikhan theke break hoye jabe mane shekhan theke venge pore jabe seikhan theke tar pore joto data ache ta r dekhabe na kintu jekhan theke break hobe tar aager sob data dekhabe

* @continue()

  condition ta jekhane milbe oitake skip kore ba bad diye sob data dekhabe 


## Conditional Classes & Styles

The @class directive conditionally compiles a CSS class string. The directive accepts an array of classes where the array key contains the class or classes you wish to add, while the value is a boolean expression. If the array element has a numeric key, it will always be included in the rendered class list

## Additional Attributes ([Documentation](https://laravel.com/docs/10.x/blade#additional-attributes))

   aita form ar input action hende korte use kora hoy ([tutorial](https://www.youtube.com/watch?v=TW5FPOfIOvc))

  * **ar kichu Blade Directiveas:** (protita blade directive () ar moddhe akta condition accept kore)

    * @checked()

      aita use kora hoy form ar checkbox ke handel korte

    * @selected()

      aita use kora hoy form ar dropdown input ar select ke handel korar jonno.


    * @disabled()  

      aita use kora hoy form ar kono input field ke disable korar jonno.

    * @readonly()

      aita use kora hoy form ar kono input field ke only readable korar jonno .

    * @required()

      aita use kora hoy form ar kono input field ke required korar jonno...mane oi field take obossoi fill up korte hobe
    

##  Including Subviews([Documentation](https://laravel.com/docs/10.x/blade#including-subviews))

  * @include('view_file_ar_nam')
    
    @include() use kora hoy akta view file ar moddhe oonoo r akta view file add korar jonno......jodi amra eemon kono view file include kori @include() ar maddhome jei view file ta amra create kori nai and amader laravel application a oi view file ta exest kore na tahole laravel akta error throw korbe. 


    jemon:

           <div>
             @include('message') "jemon ami form view file a message view file ta add kore diyechi @include() blade directive ar maddhome."
  
             <form>
             <!-- Form Contents -->
             </form>
           </div>


  * @include('view.name', ['status' => 'complete'])

     akhane amra @include view file ar sathe data ooo pass korte pari


  * @includeIf('view.name', ['status' => 'complete'])


     @includeIf() ar kaj hocche @includeIf ar moddhe je view file ta thakbe oita jodi amader application a exest thake tahole oita include korbe na thakle korbe na...kintu ooo kono error throw korbe na view file ta na thakle.

  * @includeWhen($boolean, 'view.name', ['status' => 'complete'])
  
    @includeWhen() ai ta tokhon ee kono view file ke include korbe jokhon $boolean value ba condition ta true hobe...jodi boolean value ba condition ta false return kore tahole aita include korbe na.


  * @includeUnless($boolean, 'view.name', ['status' => 'complete'])

    @includeUnless() ai blade directive ta tokhon eee kono view file ke include korbe jokhon $boolean value ba condition ta false return korbe...true return korle aita include korbe na  
     

  * @includeFirst(['custom.admin', 'admin'], ['status' => 'complete'])

    To include the first view that exists from a given array of views, you may use the includeFirst directive

    
## Rendering Views For Collections

  * @each('view.name', $jobs, 'job')


    amra @each() blade directive ar maddhome foreach loop take ak line likhte pari ba simple kore felte pari....jemon akhane 'view.name' aa  ta hocche view folder ar moddhe name nam aaa akta view file and $jobs hocche akta array and ai $jobs array theke akta akta kore job ai 'job' ar moddhe ashbe.(Check routes/web.php)

    NOTE: Jodi amra @each() ar moddhe 3 ta paramiter likhi tahole aita @foreach loop blade directive ar moto kaj korbe ....jodi amra @each() ar moddhe 4 ta paramiter likhi tahole aita @forelse loop blade directive ar moto kaj korbe


  * @each('view.name', $jobs, 'job', 'view.empty')  

  the forth paramiter is a view file name .if our $jobs array is empty then the forth view file will work

## The @once Directive

@once ডাইরেক্টিভ ta আপনাকে টেমপ্লেটের একটি অংশ ডিফাইন করতে দেয়  । এটি পেজের হেডারে জাভাস্ক্রিপ্ট একটি নির্দিষ্ট টুকরা পুশ করতে ব্যবহার করা যেতে পারে। উদাহরণস্বরূপ, আপনি একটি লুপের মধ্যে একটি নির্দিষ্ট কম্পোনেন্ট রেন্ডার করছেন তাহলে, আপনি চাইতে পারেন যে কম্পোনেন্টটি প্রথম বার রেন্ডার হওয়ার সময় মাত্র জাভাস্ক্রিপ্ট টি হেডারে পুশ koruk.(Check routes/web.php)

 * @push('')

   jodi amra onno kono file theke kono javascprit amader master.blade.php te push kori tahole oooboshoi amader ke master.blade.php ar moddhe javascprite ar niche @stack('scripts') likhe dite hobe tahle amra oono file theke je javascprit gulo push korbo ta master.blade.php te add hoye jabe...kintu oono je file theke amra javascprit push korbo oi file a ooobosoi master.blade.php ke @extends() kore nite hobe .   



## Components 
   
   Components hocche laravel ar akta freture.

  * components ar maddhome amra amader code ke centralize korte pari abong re-use korte pari...jemon amra function banai,class banai temon eee laravel amader akta freture dei component bananor jonno.  

  * There are two approaches to writing components:
  
    * class based components and 
    * anonymous components.

          
      To create a class based component, you may use the make:component Artisan command.

          php artisan make:component component_ar_nam

        ai path a amader class component ta create hobe app/View/Components and resources/views/components  

          php artisan make:component Forms/Input


        ai command ta chalale Forms name akta directory create hobe and oi directory ar moddhe Input name akta component create hoye jabe  app/View/Components/Forms  and resources/views/components/forms

      To create an anonymous component(a component with only a Blade template and no class) , you may use the make:component Artisan command. 

            php artisan make:component forms.input --view

        The command above will create a Blade file at resources/views/components/forms/input.blade.php which can be rendered as a component via <x-forms.input />.    

        NOTE: x- (component ke represent kore) 

## Rendering Components([link](https://laravel.com/docs/10.x/blade#rendering-components))        





## some Important things

* jodi amra blade template a {{ $name }} aivabe kono variable ar value print kori tahole oita thik vabei shei value take print korbe but jodi amra @{{ $name }} ai vabe likhi tahole r variable ar value print hobe na sora sori aita print hoye jabe {{ $name }} browser a r @ autometically remove hoye jabe browser theke 

* amra blade directive @if likhi muloto ai vabe kintu jodi amra @@if likhi tahole amader browser a @if print hoye jabe 

## The belows topic i don't understand:

* HTML Entity Encoding(i am unable to execute code)([link](https://laravel.com/docs/10.x/blade#html-entity-encoding))

* Conditional Classes & Styles(i have a problem to execute first part of this section) ([link](https://laravel.com/docs/10.x/blade#conditional-classes))