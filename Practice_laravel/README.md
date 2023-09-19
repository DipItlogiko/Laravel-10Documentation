# Laravel-10Documentation

validation ar moddhe amra database ke ooooo call korte pari and amra chaile login korar somoy user je information gulo dei login page aaa oi information gulo check korte pari validation ar moddhe.
## Validation ([Document](https://laravel.com/docs/10.x/validation#introduction))


 validation hocche laravel ar akta freture.

 jar maddhome amra amader application a aasha bivinno  incoming data ke validate korte pari.


## Defining The Routes

  check routes/web.php


## Customizing The Error Messages  


amra amader validation error messages gulo customize korte pari ai path a giye  lang/en/validation.php jodi amader laravel application a ai path ta na thake tahole amara ai command ta chalabo

       php artisan lang:publish

  tahole amra oi path ta peye jabo.     



## Form Request Validation([Document](https://laravel.com/docs/10.x/validation#form-request-validation))


### Creating Form Requests([tutorial](https://www.youtube.com/watch?v=8oMLIWJsCoE))

  amra amader form theke asha data ar validation ta controller ar moddhe na kore amra ai form ar data validate korar jonno akta request make korte pari ai command ar maddhome


         php artisan make:request request_file_ar_nam


  jemon:

  php artisan make:request StorePostRequest    


  ai file ta create hobe  ai path a app/Http/Requests   ar moddhe  


## Working With Validated Input([Document](https://laravel.com/docs/10.x/validation#working-with-validated-input)) 


## Custom Messages For Specific Attributes([Document](https://laravel.com/docs/10.x/validation#custom-messages-for-specific-attributes))

@error('ar moddhe attribute ar nam likhi') jeita amra amader input field ar name="" diye likhi oi name ta amader @error('') ar moddhe bole dite hoy muloto aitai hocche attribute.

@enderror



## Specifying Attributes In Language Files([Document](https://laravel.com/docs/10.x/validation#specifying-attribute-in-language-files))

amra amader laravel application ar lang/en/valildation.php ai path a giye amader validation eerror ar arrtibute ta change kore dite pari



## Specifying Values In Language Files([Document](https://laravel.com/docs/10.x/validation#specifying-values-in-language-files))


          Validator::make($request->all(), [
              'credit_card_number' => 'required_if:payment_type,cc'
          ]);

  ai code tar mane hocche ai khane akta form ar field name dhore validation kora hocche field name ta hocche 'credit_card_number' akhane validation aaa bola hoyeche ai 'credit_card_number' field ta tokhon eee required hobe jodi payment_type input field ar value cc hoy tahole.... jodi payment_type input field ar value cc na hoy tahole amar credit_card_number input field required hobe na     


## Stopping On The First Validation Failure([Document](https://laravel.com/docs/10.x/validation#request-stopping-on-first-validation-rule-failure))


 jokhon amader prothom theke kono validation fail hobe tar por theke r validation korbe na ai ta amra set kore dite pari.(chack this Document)


## Customizing The Redirect Location([Document](https://laravel.com/docs/10.x/validation#customizing-the-redirect-location))


amra Redirect location ta ke customize kore dite pari amader form request file a giye app/Http/Request ar moddhe.(check this Document)


## Manually Creating Validators([Document](https://laravel.com/docs/10.x/validation#manually-creating-validators))
  
amra nijerai validator create kore nite pari(check this Document)


## Named Error Bags([Document](https://laravel.com/docs/10.x/validation#named-error-bags))


jodi amader akta single page  a oonek gulo forms thake tahole amra ai vabe validation korbo akta name diye jemon aikhane login diyechi nam ta akta form ar field guloke validate korchi login name diye


        $validatedData = $request->validateWithBag('login', [
            'title' => ['required', 'unique:posts', 'max:255'],
           'body' => ['required'],
          ]);


## Available Validation Rules([Document](https://laravel.com/docs/10.x/validation#available-validation-rules))

Check this document to know all validation rules diply.

![image](./Screenshot%20from%202023-09-19%2010-34-53.png)

## Validating Files([Document](https://laravel.com/docs/10.x/validation#validating-files))

amra mimetypes diye form ar video input field take validate korte pari

amra mimes diye form ar photo/image input field take validate korte pari


## File Sizes([Document](https://laravel.com/docs/10.x/validation#validating-files-file-sizes))


## Validating Passwords([Document](https://laravel.com/docs/10.x/validation#validating-passwords))



ar maddhome amra amader password input field take shundor vabe validate korte pari....(IMPORTANT)check this document

## Defining Default Password Rules([Document](https://laravel.com/docs/10.x/validation#defining-default-password-rules))

amra akta service provider add kore(custom service provider add korle oitake config/app.php ar providers array ar moddhe likhe dite hobe) tar boot option ar moddhe password take define kore dite pari....(Check Document)

## Custom Validation Rules([Document](https://laravel.com/docs/10.x/validation#custom-validation-rules))

amra chaile custom validation rules create korte pari jemon (required) hocche laravel ar akta inbuild validation rules.


## Using Closures([Documet](https://laravel.com/docs/10.x/validation#using-closures))


## Implicit Rules([Document](https://laravel.com/docs/10.x/validation#implicit-rules))


## Some Important things

* jodi ami chai je kono validation rules(jemon required) ar messages ta ami change kobo tahole lang/en/validation.php te giye kote pari tahole hobe ki jodi ami kothaw required validation rules ta use kori and kew jodi kono required field ta fill up na kore form submit kore tahole required ar oi change kora message ta dekhabe sob jaigai.......kintu ami jodi chai je amar ak ak ta input field ar validation rules(jemon required) ar jonno ak ak rokomer message dekhabo tokhon amra (Creating Form Requests) ai concept a jobo....creating form request section is located in this page

## The belows topic i don't understand 

* Performing Additional Validation(i understand this but i didn't execute this code)([link](https://laravel.com/docs/10.x/validation#performing-additional-validation-on-form-requests))

* Authorizing Form Requests([link](https://laravel.com/docs/10.x/validation#authorizing-form-requests))
