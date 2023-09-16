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

      To create an anonymous component(ai component ta create hoy shudhu akta blade view file niye ai component ar kono class thake na) , you may use the make:component Artisan command.([link](https://www.youtube.com/watch?v=tirPOL3o5rM)) 

            php artisan make:component forms.input --view

        The command above will create a Blade file at resources/views/components/forms/input.blade.php which can be rendered as a component via ```<x-forms.input />```     

        NOTE: x- (component ke represent kore) and anonymous component ke call kore kono argument pass korle ta component class a likhte hoy na karon anonymous component ar kono component class hoy na. amra anonymous component call kore kono artument pass korle amra sora sori oi argument ar nam ta amader anonymous component ar moddhe $ diye tar por argument ar nam diye sora sori use korte pari.

## Rendering Components([link](https://laravel.com/docs/10.x/blade#rendering-components))   

amra sob somoy component ke render korar somoy ba call korar somoy resources/views/components ar moddhe amader component ta je name create hoy thik oi nam  ta diye call korte hobe jemon ```<x-input />```

ooonek khetre amra ```<x-input-form />``` ai rokom vabe oo call kora dekhte pari component ke (input-form) ar mane ai component ar alias create kora hoyeche (check routes/web.php Manually Registering Package Components)


## Passing Data To Components([link](https://laravel.com/docs/10.x/blade#passing-data-to-components))

## Casing([link](https://laravel.com/docs/10.x/blade#casing))

 ![image](./Screenshot%20from%202023-09-14%2016-19-46.jpg)


*  jodi amra class based component ar moddhe eemon kono argument pass kori jeitar 2ta word tahole amra red mark kora ai indentasion aaa likhbo jemon (alert-type) ai indentation ke bole kebab-case

* kebab-case aaa argument pass korle oi agrument ta ke component class (app/View/components) ar moddhe  a camelCase indentation aaa likhte hobe jemon (alertType)...green mark kora




## Short Attribute Syntax([link](https://laravel.com/docs/10.x/blade#short-attribute-syntax))

 ![image](./Screenshot%20from%202023-09-14%2013-10-42.jpg)

  * amra muloto jokhon kono class based component a variable pass kori tokhon red mark kora ai vabe likhi variable pass korte hole : diye akta attribute ar nam tar por = 'variable_ar_nam' ai vabe pass korte hoy

  * kintu amra oporer kaj ta r oo sohoje korte pari Short attribute syntax... ar maddhome jemon akhane green color diye mark kora....amra akhane x- ar por class based component ar nam likhi jeita resources/views/component ar moddhe je name file create hoy oi nam ta aikhane likhi tarpor tar por amra variable pass korar jonno : diye sorasori variable ar nam diye pass kore dite pari

## Escaping Attribute Rendering([link](https://laravel.com/docs/10.x/blade#escaping-attribute-rendering))  



## Component Methods
 
  amra class based component ar class ar moddhe mane(app/View/components) ar moddhe Component Mehods likhte pari(go to routes/web.php)


## Hiding Attributes / Methods

![image](./Screenshot%20from%202023-09-15%2017-46-23.jpg)

 jokhon amra kono class based component ke call kore oi component ar moddhe kono argument pass korbo jemon ```<x-input type="text" />``` tokhon ami chaile ai type attributes ba methods take hide kore dite pari amar component ar class ar moddhe giye (app/view/component) $expect array ar moddhe oi attribute name bole dile expect oi method ta bad diye debe ba hide kore debe mane ooo oi attribute ta ke chalabe na

  

## Component Attributes

   class based component ke call kore amra jokhon argument pass kori tokhon oi argument ba attribute ke amader component class(app/view/component) ar moddhe constructor method ar moddhe likhe dite hoy...kintu amra jei argument ba attribute pass kori kintu constructor method aaar moddhe likhi na oi argument ba attribute gulo amra ai  $attributes variable aitake(attribute bag ooo bole) ar moddhe pai.(go to routes/web.php)


## Default / Merged Attributes([Document](https://laravel.com/docs/10.x/blade#default-merged-attributes))


##  Default / Merged Attributes([Document](https://laravel.com/docs/10.x/blade#default-merged-attributes))|([tutorial(5:16)](https://www.youtube.com/watch?v=1P15O6AfWEQ))

 marge ar maddhome amra kono attribute ba argument ar default value set kore dite pari jodi kew oi argument ba attribute ar value pass na kore component render ba call korar por tahole oi attribute ba agrument ar value ja set kora thakbe marge ar modhe oo oitai render korbe ...and jodi kew component ar moddhe oi argument ta pass kore tahole marge amader pass kora value ta marge kore debe default ar sathe mane tokhon r default value dekhabe na amra ja pass korechi tai eee dekhabe....


## Non-Class Attribute Merging([Document](https://laravel.com/docs/10.x/blade#non-class-attribute-merging))

   
## Retrieving & Filtering Attributes([Document](https://laravel.com/docs/10.x/blade#filtering-attributes))

You may filter attributes using the filter method. This method accepts a closure which should return true if you wish to retain the attribute in the attribute bag.(check routes/web.php)


## Reserved Keywords

  ব্লেডের আভ্যন্তরীণ ব্যবহারের জন্য ডিফল্টভাবে কিছু কীওয়ার্ড সংরক্ষিত রয়েছে, তা করে কোম্পোনেন্ট রেন্ডার করার জন্য। নিম্নলিখিত কীওয়ার্ডগুলি আপনি নিজের কোম্পোনেন্টের পাবলিক প্রোপার্টি বা মেথডের নাম হিসেবে সংজ্ঞা দিতে পারবেন না:

  **keywords gulo holo:**

   * data
   * render
   * resolveView
   * shouldRender
   * view
   * withAttributes
   * withName 


## Slots

  Slots hocche component ar eeeee akta part.


  Slots ar maddhome amra additional content pass korte pari.amra jokhon kono component ke render kori ba call kori jemon ```<x-input />``` jodi amra solt pass korte chai tahole aivabe component call korte hobe
  
   ```<x-inpu>```

   akhane ja likhbo ta input component(resources/view/component) ar moddhe amra $slot variable ar maddhome access korte parbo
  
  ```</x-input>```  (check routes/web.php)      



## Scoped Slots ([Document](https://laravel.com/docs/10.x/blade#scoped-slots)) 


## Slot Attributes ([Document](https://laravel.com/docs/10.x/blade#slot-attributes))


## Inline Component Views([Document](https://laravel.com/docs/10.x/blade#inline-component-views))

 * Generating Inline View Components

   To create a component that renders an inline view, you may use the inline option when executing the make:component command:

       php artisan make:component component_ar_nam --inline

    jemon:

      php artisan make:component Alert --inline

    NOTE: ai inline component create korar por amader shudhu akta class file create hoy (app/view/components) ar  moddhe and jokhon amra amader ai inline component take kono blade file aa render ba call korbo tokhon oi class file ta jei name create hoyeche oi name call ba render korbo. (check routes/web.php)
 

 
## Dynamic Components([Document](https://laravel.com/docs/10.x/blade#dynamic-components))



## Anonymous Index Components([Document](https://laravel.com/docs/10.x/blade#anonymous-index-components))


## Data Properties / Attributes([Document](https://laravel.com/docs/10.x/blade#data-properties-attributes))

 amra @props array ar moddhe jei key ar nam diye debo $attributes variable ba attribute bag oi argument ba attributes gulo ke ignore korbe  ([tutorial(9:26)](https://www.youtube.com/watch?v=1P15O6AfWEQ))


## Accessing Parent Data([Document](https://laravel.com/docs/10.x/blade#accessing-parent-data))


 ar moddhe @aware somporke bola hoyeche



## Anonymous Component Paths([Document](https://laravel.com/docs/10.x/blade#anonymous-component-paths))

 ar maddhome amara amader anonymous component ar path define kore dite pari...


## Building Layouts ([Document](https://laravel.com/docs/10.x/blade#building-layouts))
### Layouts Using Components([Document](https://laravel.com/docs/10.x/blade#layouts-using-components))

#### Defining The Layout with Component([Document](https://laravel.com/docs/10.x/blade#defining-the-layout-component))

check routes/web.php

#### Applying The Layout Component([Document](https://laravel.com/docs/10.x/blade#applying-the-layout-component))

check routes/web.php


## Layouts Using Template Inheritance([Document](https://laravel.com/docs/10.x/blade#layouts-using-template-inheritance))


  ar moddhe akta bishoy ache oi ta holo 
  
    
    @section('sidebar')
        This is the master sidebar.
    @show

  ai @show ar maddhome amra oonno page theke ai sidebar section aar moddhe r oo content add korte parbo

  jemon oono page aa giye likhobo

    @section('sidebar')
       @parent
 
       <p>This is appended to the master sidebar.</p>
    @endsection

  akhane @parent hocche amader sidebar section a aagetheke je option gulo chilo oi guloke bojhacche and @parent ar pore ami notun akta option add korechi oonnoo page theke ai new add kora option ta sobar niche add hobe karon ami  @parent ke call kore tar niche notun option ta add korechi tai.


## Forms ([link](https://laravel.com/docs/10.x/blade#forms))  


## Stacks([Document](https://laravel.com/docs/10.x/blade#stacks))

 before going to this link check The @once Directive push() which is present into this READEME.md file


 amra oono file theke jokhon amader master file aa kono scripts push korbo @push('scripts') ar maddhome tokhon shei scripts gulo amader @stacks('scripts') oi scripts gulo receive korbe . jodi amra @push() diye scripts push kori tahole oi gulo por por master file ar @stacks('scripts')  store korbe kintu ami jodi chai kono scripts ke @stacks('scripts') ar moddhe thaka script gulor sobar oopore rakhbo tokhon amra @prepend('scripts') aita use korbo. (now you can check Stack Documentan)


##  Service Injection([Document](https://laravel.com/docs/10.x/blade#service-injection))

check routes/web.php
  
## Rendering Inline Blade Templates([Document](https://laravel.com/docs/10.x/blade#rendering-inline-blade-templates))

Check routes/web.php


## Rendering Blade Fragments([Document](https://laravel.com/docs/10.x/blade#rendering-blade-fragments))


 @fragment('') aita hocche laravel ar akta freture. ar kaj hocche kono view theke akta nirdisto portion select kora @fragment('') ar maddhome and oi nirdisto protion take show korano ....(Check routes/web.php)

 Check routes/web.php


## Extending Blade([Document](https://laravel.com/docs/10.x/blade#extending-blade))

 amra chaile custom directive create korte pari...check the Document.

 
## Custom Echo Handlers


## Custom If Statements([Document](https://laravel.com/docs/10.x/blade#custom-if-statements))


amra @if() blade directive take Customize korte pari...(check the Document).
## some Important things

* jodi amra blade template a {{ $name }} aivabe kono variable ar value print kori tahole oita thik vabei shei value take print korbe but jodi amra @{{ $name }} ai vabe likhi tahole r variable ar value print hobe na sora sori aita print hoye jabe {{ $name }} browser a r @ autometically remove hoye jabe browser theke 

* amra blade directive @if likhi muloto ai vabe kintu jodi amra @@if likhi tahole amader browser a @if print hoye jabe 

## The belows topic i don't understand:

* HTML Entity Encoding(i am unable to execute code)([link](https://laravel.com/docs/10.x/blade#html-entity-encoding))

* Conditional Classes & Styles(i have a problem to execute first part of this section) ([link](https://laravel.com/docs/10.x/blade#conditional-classes))

* Accessing Attributes & Slots Within Component Classes ([link](https://laravel.com/docs/10.x/blade#using-attributes-slots-within-component-class))

* Additional Dependencies(i understand the topic but i am unable to execute the code)([link](https://laravel.com/docs/10.x/blade#additional-dependencies))

* Conditionally Merge Classes([link](https://laravel.com/docs/10.x/))


* Custom Echo Handlers(i will solve it today)([link](https://laravel.com/docs/10.x/blade#custom-echo-handlers))

 