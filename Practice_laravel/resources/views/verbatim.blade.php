<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <!-- akhane ami verbatim ar moddhe blade expression ar moddhe akta vueJs variable print korechi akhane ami variable ar aage $ simble dei ni karon aita php variable na jehetu ami verbatim ar moddhe ai blade expression ta likhechi tai laravel ai blade expression take ignore korbe laravel bujte parbe je aita onno kono freamework ar syntax---->
    @verbatim
       <h1 id="app">This is Javascript Variable: {{ message }} </h1>
    @endverbatim 


<!-- akhane ami vue js ar website theke akta message ar code copy korechi aita check korar jonno--->
<!--.mount('#app') ar mane hocche id='app' jeikhane thakbe oi jaigatei shudhu message variable take call korle variable ta kaj korbe ------>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app') 
</script>
</body>
</html>